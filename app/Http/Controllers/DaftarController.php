<?php

namespace App\Http\Controllers;

use App\Models\PPDBJalurAfirmasi;
use App\Models\PPDBJalurPrestasi;
use App\Models\PPDBJalurZonasi;
use App\Models\profilescpd;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

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
    'nik' => 'required|unique:profilescpd,nik',
    'nis' => 'required|unique:profilescpd,nis',
    'nama_lengkap' => 'required|string|max:255',
    'jenis_kelamin' => 'required|in:L,P',
    'tanggal_lahir' => 'required|date',
    'alamat' => 'required',
    'asal_sekolah' => 'required',
    'nomor_telepon' => 'required',
    'namaorgtua' => 'required',
    'pekerjaanorgtua' => 'required',
    'nem'=>'required',
    'pilihansatu' => 'required',
    'pilihandua' => 'required|different:pilihansatu'        ]
    ,[
    'nik.required' => 'NIK harus diisi',
    'nik.unique'=>'NIK sudah terdaftar',
    'nis.required'=>'NIS harus diisi',
    'nama_lengkap.required'=>'Nama harus diisi',
    'jenis_kelamin.required'=>'Jenis Kelamin harus diisi',
    'tanggal_lahir.required'=>'Tanggal Lahir harus diisi',
    'alamat.required'=>'Alamat harus diisi',
    'asal_sekolah.required'=>'Asal Sekolah harus diisi',
    'nomor_telepon.required'=>'Nomor Telepon harus diisi',
    'namaorgtua.required'=>'Nama Orang Tua harus diisi',
    'nem.required'=>'NEM harus diisi',
    'pekerjaanorgtua.required'=>'Pekerjaan Orang Tua harus diisi',
    'pilihan2.different'=>'Pilihan harus berbeda',
]);
                $email = $request->nik.'@sch.id';
        $passwordPlain = Str::random(8);

        $user = User::create([
            'name' => $request->nama_lengkap,
            'email' => $email,
            'password' => bcrypt($passwordPlain),
            'role' => 'cpd',
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
            'nem'=>$request->nem,
            'namaorgtua' => $request->namaorgtua,
            'pekerjaanorgtua' => $request->pekerjaanorgtua,
            'pilihansatu' => $request->pilihansatu,
            'pilihandua' => $request->pilihandua,
            'jalur_pendaftaran' => $regpath,
            'user_id' => $user->id,
        ]);

        switch ($regpath) {
            case 'zonasi':
                PPDBJalurZonasi::create([
                    'jarak_rumah' => $request->jarak_rumah,
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
