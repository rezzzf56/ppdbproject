<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profilescpd extends Model
{
    protected $table = 'profilescpd';
     protected $fillable = [
        'user_id','nik','nis','nama_lengkap','jenis_kelamin','tanggal_lahir',
        'alamat','asal_sekolah','nomor_telepon','nem','email','namaorgtua','pekerjaanorgtua','pilihansatu',
        'pilihandua','jalur_pendaftaran', 'status'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function afirmasi(){
    return $this->hasOne(PPDBJalurAfirmasi::class, 'profilescpd_id', 'id');
}
public function zonasi(){
    return $this->hasOne(PPDBJalurAfirmasi::class, 'profilescpd_id', 'id');
}
public function prestasi(){
    return $this->hasOne(PPDBJalurAfirmasi::class, 'profilescpd_id', 'id');
}

    

}




