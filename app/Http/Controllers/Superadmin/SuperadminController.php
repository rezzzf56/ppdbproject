<?php

namespace App\Http\Controllers\Superadmin;

use App\Http\Controllers\Controller;
use App\Models\Profilesadmin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Role;

class SuperadminController extends Controller
{
    public function index()
    {
        return view('dashboard.superadmin.superadmin');
    }

    public function create()
    {
        $superadmin = Profilesadmin::all();

        return view('dashboard.superadmin.supercretadm', compact('superadmin'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|unique:profilesadmin,email',
        ],[
            'nama.required'=>'nama harus diisi',
            'email.required'=>'email harus diisi',
            'email.unique'=>'email sudah terdaftar',
        ]);
        $superadmin = Profilesadmin::create([
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return redirect()->route('superadmin.showall');
    }
public function showall(Request $request)
{
    $query = Profilesadmin::query();

    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->search . '%')
              ->orWhere('email', 'like', '%' . $request->search . '%');
        });
    }

    if ($request->filled('sort') && $request->sort == 'terlama') {
        $query->orderBy('created_at', 'asc');
    } else {
        $query->orderBy('created_at', 'desc');
    }

 $superadmin = $query->paginate(3)->appends($request->query());
    return view('dashboard.superadmin.mainmanage', compact('superadmin'));
}

    public function showuserprofiles(string $id)
    {
    $profilesadmin = Profilesadmin::with('user')->findOrFail($id);
    return view('dashboard.superadmin.detail', compact('profilesadmin','id'));
    }

    public function link(string $id)
    {
        $profilesadmin = Profilesadmin::findorfail($id);
        $users = User::with('roles')
            ->whereDoesntHave('profilesadmin')
            ->whereHas('roles', fn ($q) => $q->where('slug', 'admin'))
            ->get();

        return view('dashboard.superadmin.link', compact('profilesadmin', 'id', 'users'));
    }

    public function storelink(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
        ]);
        $profilesadmin = Profilesadmin::findOrFail($request->id);
        $profilesadmin->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('superadmin.showall');
    }
  public function createacc(){
    $superadmin = User::all();
    return view('dashboard.superadmin.createacc', compact('superadmin'));
  }
    public function saveacc(Request $request)
    {
        $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|unique:users,password',
        ],[
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password harus diisi',
            'password.unique' => 'Password sudah terdaftar',
        ]);
        $superadmin = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
$role = Role::where('slug', $request->role)->first();
if ($role) {
    $superadmin->roles()->attach($role->id);
}
return redirect()->route('superadmin.showall');
}
public function unlink(string $id)
{
    $profilesadmin = Profilesadmin::findOrFail($id);
    $profilesadmin->update([ 'user_id' => null, ]); 
    return redirect()->route('superadmin.showall');
}
public function editprofilesadm(string $id){
    $profilesadmin = Profilesadmin::findorFail($id);
    $users = User::with('roles')
            ->whereDoesntHave('profilesadmin')
            ->whereHas('roles', fn ($q) => $q->where('slug', 'admin'))
            ->get();
    return view('dashboard.superadmin.editprofilesadm', compact('profilesadmin','id','users'));
}
public function updateprofilesadm(Request $request){
    $profilesadmin = Profilesadmin::findorFail(request()->id);
    $profilesadmin->update([
        'nama' => request()->nama,
        'email' => request()->email,
        'user_id' => request()->user_id
    ]);
    return redirect()->route('superadmin.showall');
}
public function showacc(Request $request)
{
    $query = User::with('roles')
        ->whereHas('roles', function ($q) {
            $q->where('slug', 'admin');
        });

    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('email', 'like', '%' . $request->search . '%');
        
        });
    }

    if ($request->filled('sort') && $request->sort == 'terlama') {
        $query->orderBy('created_at', 'asc');
    } else {
        $query->orderBy('created_at', 'desc');
    }

    $users = $query->paginate(3)->appends($request->query());

    return view('dashboard.superadmin.showacc', compact('users'));
}
public function deleteprofilesadmin(string $id){
    {
        $admin = Profilesadmin::find($id);
        if ($admin) {
            $admin->delete();
        }
        return redirect()->route('superadmin.showall');
    }
}
public function bulkAction(Request $request)
{
    $ids = $request->input('selected', []);
    $action = $request->input('action');

    if (empty($ids) || !$action) {
        return back()->with('error', 'Pilih admin dan aksi terlebih dahulu.');
    }

    switch ($action) {
        case 'delete':
            Profilesadmin::whereIn('id', $ids)->delete();
            return redirect('superadmin.showall');
        case 'putuskan': Profilesadmin::whereIn('id', $ids)->update([
                'user_id' => null,
            ]);
            return redirect()->route('superadmin.showall');
        default:
            return back()->with('error', 'Aksi tidak valid.');
    }
}

}
