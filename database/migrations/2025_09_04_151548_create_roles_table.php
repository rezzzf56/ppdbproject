<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('username'); // SuperAdmin, Admin, CPD
            $table->string('slug')->unique(); // superadmin, admin, cpd
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('roles'); }
};