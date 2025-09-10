<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    public function handle(Request $request, Closure $next, string $permission)
    {
        if (!auth()->check() || !auth()->user()->hasPermission($permission)) {
            abort(403, 'Izin ditolak.');
        }
        return $next($request);
    }
}

