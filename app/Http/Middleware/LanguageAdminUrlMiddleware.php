<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class LanguageAdminUrlMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (is_null(session()->get('locale')) || !in_array(session()->get('locale'), config('app.languages'))) {
            app()->setLocale(app()->getLocale());
        } else {
            app()->setLocale(session()->get('locale'));
        }
        URL::defaults(['locale' =>app()->getLocale()]);

        return $next($request);
    }
}
