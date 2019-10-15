<?php

namespace App\Http\Middleware;
use Closure;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

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
        if (!Auth::user()) {
            if ($request->path() != 'admin') {
                return redirect('admin');
            }
            return $next($request);
        }
        if (Auth::user()->role_id === $admin) {
            if ($request->path() == 'admin') {
                return redirect('admin/dashboard');
            }
            return $next($request);
        } else {
            return redirect('/')->with('status', 'You are not allowed to Admin Dashboard');
        }
    }
}
