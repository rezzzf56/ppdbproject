<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Models\Profilesadmin;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('superadmin.superadmin');
    }
    public function create()
    {
        $superadmin = Profilesadmin::all();
        return view('superadmin.supercretadm',compact('superadmin'));
    }
    public function update(){
        
    }

    public function show(){

    }
    public function delete(){

    }
}
