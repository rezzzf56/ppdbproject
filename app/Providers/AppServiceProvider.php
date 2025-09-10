<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Blade::if('role', function ($roles) {
            $roles = is_array($roles) ? $roles : explode('|', $roles);
            return Auth::check() && Auth::user()->hasRole($roles);
        });

        Blade::if('canperm', function ($perm) {
            return Auth::check() && Auth::user()->hasPermission($perm);
        });
    }
}
