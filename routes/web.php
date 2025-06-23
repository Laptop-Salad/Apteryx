<?php

use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::middleware(['auth', SetLocale::class])->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

    // People
    Route::get('/people', \App\Livewire\People\Index::class)->name('people');
    Route::get('/people/{person}', \App\Livewire\People\Show::class)->name('people.show');

    // Case Files
    Route::get('/case-files', \App\Livewire\CaseFiles\Index::class)->name('case-files');
    Route::get('/case-files/{case_file}', \App\Livewire\CaseFiles\Show::class)->name('case-files.show');

    // Settings
    Route::redirect('settings', 'settings/profile');
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
    Volt::route('settings/locale', 'settings.locale')->name('settings.locale');
});

require __DIR__.'/auth.php';
