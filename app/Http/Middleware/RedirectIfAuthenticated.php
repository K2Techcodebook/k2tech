<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
         if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect('/admin');
            }
            if ($guard == "affiliate" && Auth::guard($guard)->check()) {
                return redirect('/affiliate');
            }
               if ($guard == "business" && Auth::guard($guard)->check()) {
                return redirect('/business');
            }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}
