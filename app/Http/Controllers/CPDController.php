<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CPDController extends Controller
{
    public function resultselectionpage(){
    return view('dashboard.cpd.seleksi');
    }
}
