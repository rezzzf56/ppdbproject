<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PPDBJalurAfirmasi extends Model
{
    protected $table = 'ppdbjalurafirmasi';
    protected $fillable = [
        'kartu_kip', 'profilescpd_id'
    ];

    public function profilesadmin(){
        return $this->belongsTo(Profilescpd::class, 'profilescpd_id', 'id');
    }
}
