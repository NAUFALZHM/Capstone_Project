<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    // protected $routeMiddleware = [
    //     // ...
    //     'admin.only' => \App\Http\Middleware\AdminOnly::class,
    // ];

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        abort(403, 'Akses ditolak. Hanya admin yang bisa mengakses halaman ini.');
    }
}

