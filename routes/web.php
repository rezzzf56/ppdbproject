<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halamanumum');
});
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'daftar'])->name('daftar');
Route::get('/login', [App\Http\Controllers\DaftarController::class, 'loginform'])->name('loginform');
Route::middleware(['auth'])->group(function () {
    Route::get('/super/dashboard', function () {
    return view('dashboard.superadmin');
})->name('super.dashboard')->middleware(['auth','role:superadmin']);

// Admin
Route::get('/admin/dashboard', function () {
    return view('dashboard.admin');
})->name('admin.dashboard')->middleware(['auth','role:admin']);

// CPD
Route::get('/cpd/dashboard', function () {
    return view('dashboard.cpd');
})->name('cpd.dashboard')->middleware(['auth','role:cpd']);
   
});

require __DIR__.'/auth.php';
