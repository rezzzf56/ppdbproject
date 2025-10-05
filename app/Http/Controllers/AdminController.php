<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Profilescpd;
use App\Models\PPDBJalurAfirmasi;
use App\Models\PPDBJalurPrestasi;
use App\Models\PPDBJalurZonasi;



class AdminController extends Controller
{

public function showcpd(Request $request)
    {
        $search = $request->input('search');
        $sort = $request->input('sort', 'terbaru');
        $jalur = $request->input('jalur');
        $jurusan = $request->input('jurusan');

        $query = Profilescpd::query()
            ->leftJoin('ppdbjalurzonasi', 'profilescpd.id', '=', 'ppdbjalurzonasi.profilescpd_id')
            ->leftJoin('ppdbjalurafirmasi', 'profilescpd.id', '=', 'ppdbjalurafirmasi.profilescpd_id')
            ->leftJoin('ppdbjalurprestasi', 'profilescpd.id', '=', 'ppdbjalurprestasi.profilescpd_id')
            ->select(
                'profilescpd.id',
                'profilescpd.nama_lengkap',
                'profilescpd.jalur_pendaftaran',
                'profilescpd.pilihansatu',
                'profilescpd.pilihandua',
            );

        if ($search) {
            $query->where('profilescpd.nama_lengkap', 'like', "%{$search}%");
        }

        if ($jalur) {
            $query->where('profilescpd.jalur_pendaftaran', $jalur);
        }

        if ($jurusan) {
            $query->where(function ($q) use ($jurusan) {
                $q->where('profilescpd.pilihansatu', $jurusan)
                  ->orWhere('profilescpd.pilihandua', $jurusan);
            });
        }
        if ($sort === 'terlama') {
            $query->orderBy('profilescpd.created_at', 'asc');
        } else {
            $query->orderBy('profilescpd.created_at', 'desc');
        }

        $admin = $query->paginate(10)->withQueryString();

        return view('dashboard.admin.showcpd', compact('admin', 'jalur', 'jurusan'));
    }
    public function showcpddetail(string $id){
           $cpd = Profilescpd::with([
        'user',
        'afirmasi',
        'prestasi',
        'zonasi'
    ])->findOrFail($id);

    return view('dashboard.admin.detailcpd', compact('cpd'));
}    
 public function verifyCPD($id)
    {
        $cpd = Profilescpd::findOrFail($id);
        $cpd->status = 'active';
        $cpd->save();

        return back()->with('success', 'CPD berhasil diverifikasi dan diaktifkan.');
    }

    public function rejectCPD($id)
    {
        $cpd = Profilescpd::findOrFail($id);
        $cpd->status = 'rejected';
        $cpd->save();

        return back()->with('error', 'CPD telah ditolak.');
    }
public function generateToken(Profilescpd $cpd)
{
    $user = $cpd->user;
    if (!$user) {
        return back()->with('error', 'User tidak ditemukan untuk CPD ini.');
    }

    $token = Str::upper(Str::random(10));
    $user->update([
        'login_token' => $token,
        'token_expires_at' => Carbon::now()->addMinutes(30),
    ]);

    return back()->with('success', "Token berhasil dibuat: $token");
}




}
