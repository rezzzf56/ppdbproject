<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profiles;

class DaftarController extends Controller
{
    public function jalurpendaftaran()
    {
        return view('daftar.pilih-jalur');
    }
    public function simpanJalur(Request $request)
    {
        $request->validate([
            'jalur_pendaftaran' => 'required|in:afirmasi,prestasi,zonasi',
        ]);

        $profile = Profiles::create([
            'jalur_pendaftaran' => $request->jalur_pendaftaran,
            'status' => 'pending',
        ]);

   return redirect()->route('daftar.form', [
    'id' => $profile->id,
    'jalur' => $profile->jalur_pendaftaran
]);
    }

    public function form($id, $jalur)
    {
        $profile = Profiles::findOrFail($id);
        return view("daftar.daftar-$jalur", compact('profile','jalur'));
    }

    public function simpanForm(Request $request, $id, $jalur)
    {
        $data = $request->validate([
            'nik' => 'required',
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'asal_sekolah' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required|email',
            'namaorgtua' => 'required',
            'pekerjaanorgtua' => 'required',
            'pilihansatu' => 'required',
            'pilihandua' => 'required'
        ]);

        $profile = Profiles::findOrFail($id);
        $profile->update($data);

        return view('daftar.selesai');
    }
}
