<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;

/* halaman awal */
Route::get('/', function () {
    return view('halamanumum');
})->name('home');
Route::get('/info', [App\Http\Controllers\HalamanController::class, 'info'])->name('info');
Route::get('/jurusan', [App\Http\Controllers\HalamanController::class, 'jurusan'])->name('jurusan');
Route::get('/faq', [App\Http\Controllers\HalamanController::class, 'faq'])->name('faq');
Route::get('/about', [App\Http\Controllers\HalamanController::class, 'about'])->name('about');
/* daftar */
Route::get('/daftar', [DaftarController::class, 'jalurpendaftaran'])->name('jalurpendaftaran');
Route::post('/pendaftaran/jalurpendaftaran', [DaftarController::class, 'simpanJalur'])->name('simpanJalur');
Route::get('/pendaftaran/{id}/{jalur}', [DaftarController::class, 'form'])->name('daftar.form');
Route::post('/pendaftaran/{id}/{jalur}', [DaftarController::class, 'simpanForm'])->name('daftar.simpanForm');
/* superadmin */
Route::get('/superadmin/create', [App\Http\Controllers\Superadmin\SuperadminController::class, 'create'])->name('superadmin.create');
Route::get('/superadmin/showall', [App\Http\Controllers\Superadmin\SuperadminController::class, 'showall'])->name('superadmin.showall');
Route::get('superadmin/detail', [App\Http\Controllers\Superadmin\SuperadminController::class, 'show'])->name('superadmin.show');
Route::post('/superadmin/store', [App\Http\Controllers\Superadmin\SuperadminController::class, 'store'])->name('superadmincreate.store');
Route::get('/superadmin/editadmin', [App\Http\Controllers\Superadmin\SuperadminController::class, 'edit'])->name('superadmin.edit');
Route::get('/superadmin/show/{id}', [\App\Http\Controllers\Superadmin\SuperadminController::class, 'showuserprofiles'])->name('superadmin.detail');
Route::get('superadmin/hubungkanakun/{id}', [\App\Http\Controllers\Superadmin\SuperadminController::class, 'link'])->name('superadmin.link');
Route::post('/superadmin/showall', [App\Http\Controllers\Superadmin\SuperadminController::class, 'storelink'])->name('superadmin.storelink');
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
