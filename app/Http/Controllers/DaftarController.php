<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profilescpd;

class DaftarController extends Controller
{
    public function selectpath(){
        return view('daftar.pilih-jalur');
    }
    public function savepath(Request $request){
      $regpath = $request->jalur_pendaftaran;
      session(['jalur_pendaftaran'=>'$jalur']);
      $routes = ['afirmasi' => 'form.afirmasi',
                  'zonasi' => 'form.zonasi',
                  'prestasi' => 'form.prestasi'
    ];
    if(array_key_exists($regpath, $routes)){
        return redirect()->route($routes[$regpath]);
    }
}
    public function zonasi(){

    return view('daftar.daftar-zonasi');

    }
}
