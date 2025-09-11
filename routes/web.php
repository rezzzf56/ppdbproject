<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('halamanumum');
});


require __DIR__.'/auth.php';
