<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halamanumum');
});
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'daftar'])->name('daftar');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/CPD', function () {
        return "Selamat datang di dashboard!";
    });

    Route::get('/dashboard/Admin', function () {
        return "Halaman profil";
    });
        Route::get('/dashboard/SuperAdmin', function () {
        return "Halaman profil";
    });
});

require __DIR__.'/auth.php';
