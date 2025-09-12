<?php   
namespace App\Http\Controllers;

class DaftarController extends Controller{
    public function daftar(){
        return view('halaman.daftar');
    }
    public function loginform(){
        return view('auth.login');
    }
}