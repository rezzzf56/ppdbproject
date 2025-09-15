<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaftarController;

/* halaman awal */
Route::get('/', function () {
    return view('halamanumum');
});
Route::get('/info', [App\Http\Controllers\HalamanController::class, 'info'])->name('info');
Route::get('/jurusan',[App\Http\Controllers\HalamanController::class, 'jurusan'])->name('jurusan');
Route::get('/faq',[App\Http\Controllers\HalamanController::class, 'faq'])->name('faq');
Route::get('/about',[App\Http\Controllers\HalamanController::class, 'about'])->name('about');
/* daftar */
Route::get('/daftar', [DaftarController::class, 'jalurpendaftaran'])->name('jalurpendaftaran');
Route::post('/pendaftaran/jalurpendaftaran', [DaftarController::class, 'simpanJalur'])->name('simpanJalur');
Route::get('/pendaftaran/{id}/{jalur}', [DaftarController::class, 'form'])->name('daftar.form');
Route::post('/pendaftaran/{id}/{jalur}', [DaftarController::class, 'simpanForm'])->name('daftar.simpanForm');
/* superadmin */
Route::get('/superadmin/create', [App\Http\Controllers\Superadmin\SuperadminController::class, 'create'])->name('superadmin.create');
Route::middleware(['auth'])->group(function () {
    Route::get('/superadmin/dashboard', function () {
    return view('dashboard.superadmin.superadmin');
})->name('super.dashboard')->middleware(['auth']);

// Admin
Route::get('/admin/dashboard', function () {
    return view('dashboard.admin.admin');
})->name('admin.dashboard')->middleware(['auth']);

// CPD
Route::get('/cpd/dashboard', function () {
    return view('dashboard.cpd.cpd');
})->name('cpd.dashboard')->middleware(['auth']);

});

require __DIR__.'/auth.php';
