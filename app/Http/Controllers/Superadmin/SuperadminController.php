<?php

namespace App\Http\Controllers\Superadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Profilesadmin;
use App\Models\User;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('dashboard.superadmin.superadmin');
    }
    public function create()
    {
        $superadmin = Profilesadmin::all();
        return view('dashboard.superadmin.supercretadm',compact('superadmin'));
    }
        public function store(Request $request )
        {
        $request->validate([
            'nama'=>'required',
            'email'=>'required'
        ]);
        $superadmin = Profilesadmin::create([
            'nama'=>$request->nama,
            'email'=>$request->email
        ]);
        return redirect()->route('superadmin.showall');
        }
    
    public function update(){
        
        
    }   
    public function delete(){

    }


    public function showall(){
        $superadmin = Profilesadmin::orderBy('nama','asc')->get();
        return view('dashboard.superadmin.mainmanage', compact('superadmin'));
     
    }
public function showuserprofiles(string $id){
       $users = User::with('profilesadmin')->findorfail($id);
       return view('dashboard.superadmin.detail', compact('users','id'));
}
public function link(string $id){
      $profilesadmin = Profilesadmin::findorfail($id);
      $users = User::whereDoesntHave('profilesadmin')->whereHas('roles', function($query) {$query->where('slug', 'admin');})->get();
      return view('dashboard.superadmin.link', compact('profilesadmin','id','users'));
}
public function storelink(Request $request){
        $request->validate([
           'user_id'=>'required'
        ]);
        $superadmin = Profilesadmin::update([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'user_id'=>$request->user_id
        ]);
        return redirect()->route('superadmin.showall');
        }
}

