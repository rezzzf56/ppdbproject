<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PPDBJalurPrestasi extends Model
{
    protected $table = 'ppdbjalurprestasi';
    protected $fillable = [
        'prestasi'
    ];
    public function profilesadmin(){
        return $this->belongsTo(Profilescpd::class, 'profilescpd_id', 'id');
    }
}
