<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next, string $permission)
    {
        if (!Auth::check() || !Auth::user()->hasPermission($permission)) {
            abort(403, 'Izin ditolak.');
        }
        return $next($request);
    }
}
