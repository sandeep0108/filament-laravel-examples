<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect(string $provider)
    {
        $this->validateProvider($provider);

        return Socialite::driver($provider)->redirect();
    }

    /**
     * @throws ValidationException
     */
    public function callback(string $provider)
    {
        $this->validateProvider($provider);

        $response = Socialite::driver($provider)->user();
        dd($response);

        $user = User::firstWhere(['email' => $response->getEmail()]);

        if ($user) {
            $user->update([$provider . '_id' => $response->getId()]);
        } else {
            $user = User::create([
                $provider . '_id' => $response->getId(),
                'name'            => $response->getName(),
                'email'           => $response->getEmail(),
                'password'        => '',
            ]);
        }

        auth()->login($user);

        return redirect()->intended(route('filament.app.pages.dashboard'));
    }

    /**
     * @throws ValidationException
     */
    protected function validateProvider(string $provider): array
    {
        return $this->getValidationFactory()->make(
            ['provider' => $provider],
            ['provider' => 'in:github']
        )->validate();
    }
}
