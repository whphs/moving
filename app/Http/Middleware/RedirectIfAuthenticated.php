<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

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
        if (Auth::guard($guard)->check()) {
            // return redirect('/home');
            return redirect('/');
        }

        // $admin = Config::get('constants.USER_ROLES.ADMIN');
        // if (Auth::user()->role_id === $admin) {
        //     return redirect('admin/dashboard');
        // }

        return $next($request);
    }
}
