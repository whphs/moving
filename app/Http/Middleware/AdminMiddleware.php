<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $admin = Config::get('constants.USER_ROLES.ADMIN');
        if (Auth::user()->role === $admin) {
            return $next($request);
        } else {
            return redirect('/home')->with('status', 'You are not allowed to Admin Dashboard');
        }
    }
}
