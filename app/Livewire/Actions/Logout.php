<?php

namespace App\Livewire\Actions;

use App\Locale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout
{
    /**
     * Log the current user out of the application.
     */
    public function __invoke()
    {
        $locale = \auth()->user()->language;

        Auth::guard('web')->logout();

        Session::invalidate();
        Session::regenerateToken();

        return
            $locale !== Locale::English->value
            ? redirect()->route('login.locale', ['locale' => $locale])
            : redirect()->route('login');
    }
}
