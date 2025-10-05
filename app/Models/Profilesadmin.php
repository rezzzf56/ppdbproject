<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profilesadmin extends Model
{
    protected $table = 'profilesadmin';
    protected $fillable = [
        'nama',
        'email',
        'user_id',
        'token'
    ];
public function user()
{
    return $this->belongsTo(User::class,'user_id','id');
}

}