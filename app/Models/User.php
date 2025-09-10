<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function roles() { return $this->belongsToMany(\App\Models\Role::class, 'user_role'); }

public function hasRole($roles): bool {
    $roles = is_array($roles) ? $roles : [$roles];
    return $this->roles()->whereIn('slug', $roles)->exists();
}

public function hasPermission(string $permission): bool {
    return $this->roles()
        ->whereHas('permissions', fn($q) => $q->where('slug', $permission))
        ->exists();
}

public function profile() { return $this->hasOne(\App\Models\Profile::class); }

}
