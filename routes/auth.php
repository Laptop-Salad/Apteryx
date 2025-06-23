<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

function authRoutes($locale = false) {
    $extra = $locale ? '.locale' : '';
    Volt::route('login', 'auth.login')->name("login{$extra}");
    Volt::route('register', 'auth.register')->name("register{$extra}");
}

Route::middleware(['guest', SetLocale::class])->prefix('{locale}')->group(function () {
    authRoutes(true);
});

Route::middleware('guest')->group(function () {
    authRoutes();
});

Route::post('logout', App\Livewire\Actions\Logout::class)->name('logout');
