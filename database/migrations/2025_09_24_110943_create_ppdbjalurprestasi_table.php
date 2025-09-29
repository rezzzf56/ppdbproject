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

        Schema::create('ppdbjalurprestasi', function (Blueprint $table) {
            $table->id();
            $table->string('prestasi')->nullable();
            $table->unsignedBigInteger('profilescpd_id')->nullable()->unique();
          $table->foreign('profilescpd_id')
          ->references('id')->on('profilescpd')
          ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdbjalurprestasi');
    }
};
