<?php

namespace App\Http\Controllers;

use App\Models\PPDBJalurAfirmasi;
use App\Models\PPDBJalurPrestasi;
use App\Models\PPDBJalurZonasi;
use App\Models\profilescpd;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function selectpath()
    {
        return view('daftar.pilih-jalur');
    }

    public function savepath(Request $request)
    {
        $regpath = $request->jalur_pendaftaran;
        session(['jalur_pendaftaran' => $regpath]);
        $routes = ['afirmasi' => 'form.afirmasi',
            'zonasi' => 'form.zonasi',
            'prestasi' => 'form.prestasi',
        ];
        if (array_key_exists($regpath, $routes)) {
            return redirect()->route($routes[$regpath]);
        }
    }

    public function zonasi()
    {

        return view('daftar.daftar-zonasi');

    }

    public function afirmasi()
    {
        return view('daftar.daftar-afirmasi');
    }

    public function prestasi()
    {
        return view('daftar.daftar-prestasi');
    }

    public function storereg(Request $request)
    {
        $request->validate([
            'nik',
            'nis',
            'nama_lengkap',
            'jenis_kelamin',
            'tanggal_lahir',
            'alamat',
            'asal_sekolah',
            'nomor_telepon',
            'email',
            'namaorgtua',
            'pekerjaanorgtua',
            'pilihansatu',
            'pilihandua',
        ]);
        $regpath = session('jalur_pendaftaran');
        $profil = Profilescpd::create([
            'nik' => $request->nik,
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'nomor_telepon' => $request->nomor_telepon,
            'email' => $request->email,
            'namaorgtua' => $request->namaorgtua,
            'pekerjaanorgtua' => $request->pekerjaanorgtua,
            'pilihansatu' => $request->pilihansatu,
            'pilihandua' => $request->pilihandua,
            'jalur_pendaftaran' => $regpath,
        ]);

        switch ($regpath) {
            case 'zonasi':
                PPDBJalurZonasi::create([
                    'jarak_rumah' => $request->jarak_rumah,
                    'lokasi_rumah' => $request->lokasi_rumah,
                    'profilescpd_id' => $profil->id,
                ]);
                break;

            case 'prestasi':
                $path = null;
                if ($request->hasFile('prestasi')) {
                    $file = $request->file('prestasi');
                    $filename = time().'_'.$file->getClientOriginalName();
                    $path = $file->storeAs('prestasi', $filename, 'public');
                }
                PPDBJalurPrestasi::create([
                    'prestasi' => $path,
                    'profilescpd_id' => $profil->id,
                ]);
                break;

            case 'afirmasi':
                $path = null;
                if ($request->hasFile('kartu_kip')) {
                    $file = $request->file('kartu_kip');
                    $filename = time().'_'.$file->getClientOriginalName();
                    $path = $file->storeAs('kartu_kip', $filename, 'public');
                }
                PPDBJalurAfirmasi::create([
                    'kartu_kip' => $path,
                    'profilescpd_id' => $profil->id,
                ]);
                break;
        }

        return redirect()->route('success.reg');
    }

    public function successreg()
    {
        return view('daftar.success');
    }
}
