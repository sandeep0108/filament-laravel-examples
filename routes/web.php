<?php

//use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\TestController;
use App\Livewire\Form;

\Illuminate\Support\Facades\Route::get('form', Form::class);

//
//Route::get('/auth/{provider}/redirect', [SocialiteController::class, 'redirect'])
//    ->name('socialite.redirect');
//Route::get('/auth/{provider}/callback', [SocialiteController::class, 'callback'])
//    ->name('socialite.callback');
Route::get('/check/', [TestController::class, 'check']);

