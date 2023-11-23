<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class LanguageUrlMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Route::prefix('az')->group(function(){
        //Route::redirect('/',app()->getLocale());Route::prefix('{locale}')->group(function(){
        if (in_array($request->segment(1), config('app.languages')) ) {
            app()->setLocale($request->segment(1));
            $request->merge(['locale' => app()->getLocale()]);
            URL::defaults(['locale' =>app()->getLocale()]);
        } else {
            $segments = $request->segments();
            $segments[0] = app()->getLocale();
            app()->setLocale(session()->get('lang'));
            URL::defaults(['locale' =>app()->getLocale()]);
            return redirect()->intended(config('app.url').'/'.implode('/',$segments));
        }
        return $next($request);
    }
}
