<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
     protected $fillable = [
        'user_id','nik','nis','nama_lengkap','jenis_kelamin','tanggal_lahir',
        'alamat','asal_sekolah','nomor_telepon','email','namaorgtua','pekerjaanorgtua','pilihan1',
        'pilihan2','dokumenpendukung'
    ];


}




