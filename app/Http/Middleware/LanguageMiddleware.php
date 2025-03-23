<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the locale is set in the session
        if (Session::has('locale')) {
            $locale = Session::get('locale');
            App::setLocale($locale);

            // Set the page direction based on the locale
            $direction = $locale === 'ar' ? 'rtl' : 'ltr';
            Session::put('direction', $direction);
        } else {
            // Default direction if no locale is set
            Session::put('direction', 'ltr');
        }

        return $next($request);
    }
}
