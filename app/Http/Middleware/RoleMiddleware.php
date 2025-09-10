<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!auth()->check() || !auth()->user()->hasRole($roles)) {
            abort(403, 'Anda tidak memiliki peran yang sesuai.');
        }
        return $next($request);
    }
}

