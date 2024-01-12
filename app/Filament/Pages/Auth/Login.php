<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Components\ViewField;
use Filament\Pages\Auth\Login as BasePage;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class Login extends BasePage
{
    public function mount(): void
    {
        parent::mount();

        $this->form->fill([
            'email' => 'admin@filamentphp.com',
            'password' => 'password',
            'remember' => true,
        ]);
    }
}
