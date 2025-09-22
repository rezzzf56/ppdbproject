<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profilescpd extends Model
{
    protected $table = 'profilescpd';
     protected $fillable = [
        'user_id','nik','nis','nama_lengkap','jenis_kelamin','tanggal_lahir',
        'alamat','asal_sekolah','nomor_telepon','email','namaorgtua','pekerjaanorgtua','pilihan1',
        'pilihan2','jalur_pendaftaran', 'status'
    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}




