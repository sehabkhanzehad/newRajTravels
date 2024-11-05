<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (session()->has('locale') && array_key_exists(session()->get('locale'), config('languages'))) {
            app()->setLocale(session()->get('locale'));
        } else {
            app()->setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}

// if (Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages'))) {
//     App::setLocale(Session()->get('applocale'));
// }
// else {
//     App::setLocale(config('app.fallback_locale'));
// }
// return $next($request);
