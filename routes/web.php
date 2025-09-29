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
Route::get('/daftar', [DaftarController::class, 'selectpath'])->name('selectpath');
Route::post('/savepath', [DaftarController::class, 'savepath'])->name('savepath');
Route::get('/daftar/zonasi', [DaftarController::class, 'zonasi'])->name('form.zonasi');
Route::get('/daftar/prestasi', [DaftarController::class, 'prestasi'])->name('form.prestasi');
Route::get('/daftar/afirmasi', [DaftarController::class, 'afirmasi'])->name('form.afirmasi');
Route::get('daftar/success', [DaftarController::class, 'successreg'])->name('success.reg');
Route::post('/daftar/savereg', [DaftarController::class, 'storereg'])->name('form.storereg');
Route::middleware(['auth'])->group(function () {
    Route::get('/superadmin/dashboard', function () {
        return view('dashboard.superadmin.superadmin');
    })->name('super.dashboard')->middleware(['auth']);
    Route::get('/superadmin/create', [App\Http\Controllers\Superadmin\SuperadminController::class, 'create'])->name('superadmin.create');
    Route::get('/superadmin/showall', [App\Http\Controllers\Superadmin\SuperadminController::class, 'showall'])->name('superadmin.showall');
    Route::post('/superadmin/store', [App\Http\Controllers\Superadmin\SuperadminController::class, 'store'])->name('superadmincreate.store');
    Route::get('/superadmin/editadmin', [App\Http\Controllers\Superadmin\SuperadminController::class, 'edit'])->name('superadmin.edit');
    Route::get('/superadmin/show/{id}', [\App\Http\Controllers\Superadmin\SuperadminController::class, 'showuserprofiles'])->name('superadmin.detail');
    Route::get('superadmin/hubungkanakun/{id}', [\App\Http\Controllers\Superadmin\SuperadminController::class, 'link'])->name('superadmin.link');
    Route::post('/superadmin/storelink', [App\Http\Controllers\Superadmin\SuperadminController::class, 'storelink'])->name('superadmin.storelink');
    Route::get('/superadmin/createaccount', [App\Http\Controllers\Superadmin\SuperadminController::class, 'createacc'])->name('superadmin.createacc');
    Route::post('/superadmin/saveacc', [App\Http\Controllers\Superadmin\SuperadminController::class, 'saveacc'])->name('superadminsaveacc.store');
    Route::post('/superadmin/unlink/{id}', [App\Http\Controllers\Superadmin\SuperadminController::class, 'unlink'])->name('superadmin.unlink');
    Route::get('/superadmin/edit/{id}', [App\Http\Controllers\Superadmin\SuperadminController::class, 'editprofilesadm'])->name('superadmin.editprofilesadm');
    Route::put('/superadmin/update', [App\Http\Controllers\Superadmin\SuperadminController::class, 'updateprofilesadm'])->name('superadmin.updateprofilesadm');
    Route::get('/superadmin/showacc', [App\Http\Controllers\Superadmin\SuperadminController::class, 'showacc'])->name('superadmin.showacc');
    Route::delete('/superadmin/delete/{id}', [App\Http\Controllers\Superadmin\SuperadminController::class, 'deleteprofilesadmin'])->name('superadmin.deleteprofilesadmin');
    Route::post('/superadmin/bulk-action', [App\Http\Controllers\Superadmin\SuperadminController::class, 'bulkAction'])->name('superadmin.bulkAction');
 
    // Admin
    Route::get('/admin/dashboard', function () {return view('dashboard.admin.admin');})->name('admin.dashboard')->middleware(['auth']);
    Route::get('/admin/showcpd', [App\Http\Controllers\AdminController::class, 'showcpd'])->name('admin.showcpd');
    // CPD
    Route::get('/cpd/dashboard', function () {
        return view('dashboard.cpd.cpd');
    })->name('cpd.dashboard')->middleware(['auth']);

});

require __DIR__.'/auth.php';
