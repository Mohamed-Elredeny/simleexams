<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect()->route('admin.dashboard');
        }

        if ($guard == "instructor" && Auth::guard($guard)->check()) {
            return redirect()->route('instructor.dashboard');
        }

        if ($guard == "student" && Auth::guard($guard)->check()) {
            return redirect()->route('profile');
        }

        if (Auth::guard($guard)->check()) {
            return redirect()->route('home');
        }

        return $next($request);
    }
}
