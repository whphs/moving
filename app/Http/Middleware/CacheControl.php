<?php

namespace App\Http\Middleware;

use Closure;

class CacheControl
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($request->is('*.js') || $request->is('*.css')){
            $response->header("pragma", "private");
            $response->header("Cache-Control", " private, max-age=86400");
        } else {
            $response->header("pragma", "no-cache");
            $response->header("Cache-Control", "no-store,no-cache, must-revalidate, post-check=0, pre-check=0");
        }
        return $response;
    }
}
