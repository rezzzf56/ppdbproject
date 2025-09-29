<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PPDBJalurZonasi extends Model
{
    protected $table = 'ppdbjalurzonasi';
    protected $fillable = [
       'profilescpd_id','jarak_rumah', 'lokasi_rumah'
    ];

    public function profilesadmin(){
        return $this->belongsTo(Profilescpd::class, 'profilescpd_id', 'id');
    }
}
