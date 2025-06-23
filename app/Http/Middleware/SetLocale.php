<?php

namespace App\Http\Middleware;

use App\Locale;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response {
        if (isset(auth()->user()->id)) {
            app()->setLocale(auth()->user()->language);
        } else if (request()->route('locale') && Locale::tryFrom(request()->route('locale'))) {
            app()->setLocale(request()->route('locale'));
        }

        return $next($request);
    }
}
