<?php

namespace App\Http\Middleware;

use Closure;


class DevMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->has('token') || $request->input('token') != env('DEV_TOKEN')) {
            return redirect('/');
        }

        return $next($request);
    }
}