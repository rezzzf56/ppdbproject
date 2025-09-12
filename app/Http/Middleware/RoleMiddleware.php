<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next, ...$roles)
    {
       if (!Auth::check() || !Auth::user()->hasRole($roles)) {
    abort(403, 'Anda tidak memiliki peran yang sesuai.');
}
        return $next($request);
    }
}
