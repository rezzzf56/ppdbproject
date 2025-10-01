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
/*************  ✨ Windsurf Command ⭐  *************/
    /**
     * Display the FAQ page.
/*******  ab6c28fd-01d7-43e7-bb8c-74e2d9362cb1  *******/
    public function faq(){
        return view('halaman.faq');
    }
}
