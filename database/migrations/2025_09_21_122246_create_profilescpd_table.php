<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profilescpd', function (Blueprint $table) {
            $table->id();
            $table->string('nik',16)->nullable();
            $table->string('nis',16)->nullable();
            $table->string('nama_lengkap',64)->nullable();
            $table->enum('jenis_kelamin', ['L', 'P'])->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->text('alamat')->nullable();
            $table->string('asal_sekolah',32)->nullable();
            $table->string('nomor_telepon',16)->nullable();
            $table->string('email',16)->nullable();
            $table->string('namaorgtua',64)->nullable();
            $table->string('pekerjaanorgtua',16)->nullable();
            $table->enum('pilihansatu', ['TKJ', 'RPL', 'Perhotelan', 'Perkantoran', 'Otomotif', 'Pertanian'])->nullable();
            $table->enum('pilihandua', ['TKJ', 'RPL', 'Perhotelan', 'Perkantoran', 'Otomotif', 'Pertanian'])->nullable();
            $table->decimal('nilai',4,2)->nullable();
            $table->enum('jalur_pendaftaran', ['afirmasi', 'prestasi', 'zonasi'])->nullable();
            $table->enum('status', ['pending', 'active', 'rejected'])->default('pending');
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profilescpd');
    }
};
