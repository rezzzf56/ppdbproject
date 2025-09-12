<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datacpd extends Model
{
     protected $fillable = [
        'user_id','nik','nis','nama_lengkap','jenis_kelamin','tanggal_lahir',
        'alamat','asal_sekolah','nomor_telepon','email','namaorgtua','pekerjaanorgtua',
    ];

    public function user() { return $this->belongsTo(User::class); }
}

}


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('dataCPD', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nik',16)->nullable();
            $table->string('nis',16)->nullable();
            $table->string('nama_lengkap',64);
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('asal_sekolah',32)->nullable();
            $table->string('nomor_telepon',16)->nullable();
            $table->string('email',16)->nullable();
            $table->string('namaorgtua',64)->nullable();
            $table->string('pekerjaanorgtua',16)->nullable();
            $table->enum('pilihan jurusan ke 1', ['TKJ', 'RPL', 'Perhotelan', 'Perkantoran', 'Otomotif', 'Pertanian'])->nullable();
            $table->enum('pilihan jurusan ke 2', ['TKJ', 'RPL', 'Perhotelan', 'Perkantoran', 'Otomotif', 'Pertanian'])->nullable();
            $table->string('dokumen pendukung');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
