<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function info(){
        return view('halaman.info');
    } public function about(){
        return view('halaman.about');
    }
    public function jurusan(){
        return view('halaman.jurusan');
    }
    public function faq(){
        return view('halaman.faq');
    }
}
