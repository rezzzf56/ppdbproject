<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profilescpd;

class AdminController extends Controller
{

    public function showcpd(Request $request){
            $query = Profilescpd::query();

    if ($request->filled('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('nama', 'like', '%' . $request->search . '%');
        });
    }

    if ($request->filled('sort') && $request->sort == 'terlama') {
        $query->orderBy('created_at', 'asc');
    } else {
        $query->orderBy('created_at', 'desc');
    }

 $admin = $query->paginate(10)->appends($request->query());
    return view('dashboard.admin.showcpd', compact('admin'));
    }
}
