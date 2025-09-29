@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card w-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Daftar Afirmasi</h5>
                <small class="text-muted float-end"></small>
            </div>
            <div class="card-body mt-2">
                <form action="{{route('form.storereg')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3 align-items-center">
                   <label class="col-sm-1 col-form-label text-sm-start" for="nik">NIK</label>
                   <div class="col-sm-11">                      
                            <input type="text" name="nik" id="nik" class="form-control"
                                placeholder="Isi dengan NIK" />
                        </div>
                    </div>
                    <div class="row mb-3">
                         <label class="col-sm-1 col-form-label text-sm-start" for="nis">NIS</label>
                   <div class="col-sm-11">   
                            <input type="text" name="nis" id="nis" class="form-control"
                                placeholder="Isi dengan NIS" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="nama_lengkap">Nama</label>
                        <div class="col-sm-11">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                placeholder="Isi dengan nama lengkap" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="nama">Jenis Kelamin</label>
                        <div class="col-sm-11">
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                                <option value="" disabled>Pilih Jenis Kelamin</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="tanggal_lahir">Tanggal Lahir</label>
                        <div class="col-sm-11">
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="alamat">Alamat</label>
                        <div class="col-sm-11">
                            <input type="text" name="alamat" id="alamat" class="form-control"
                                placeholder="Isi dengan alamat" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="asal_sekolah">Asal Sekolah</label>
                        <div class="col-sm-11">
                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control"
                                placeholder="Isi Asal Sekolah" />
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="nomor_telepon">Nomor Telepon</label>
                        <div class="col-sm-11">
                            <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control"
                                placeholder="Isi dengan Nomor Telepon" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="email">Email</label>
                        <div class="col-sm-11">
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="Isi dengan Email" />
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="namaorgtua">Nama orang tua</label>
                        <div class="col-sm-11">
                            <input type="text" name="namaorgtua" id="namaorgtua" class="form-control"
                                placeholder="Isi dengan Nama Orang Tuamu" />
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="pekerjaanorgtua">Pekerjaan Orang Tua</label>
                        <div class="col-sm-11">
                            <input type="text" name="pekerjaanorgtua" id="pekerjaanorgtua" class="form-control"
                                placeholder="Isi dengan Pekerjaan Orang Tuamu" />
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="pilihansatu">Pilihan Jurusan 1</label>
                        <div class="col-sm-11">
                            <select name="pilihansatu" id="pilihansatu" class="form-control" required>
                                <option value="" disabled>Pilih Jurusan</option>
                                <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                <option value="Perhotelan">Perhotelan</option>
                                <option value="Perkantoran">Perkantoran</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Pertanian">Pertanian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="pilihandua">Pilihan Jurusan 2</label>
                        <div class="col-sm-11">
                            <select name="pilihandua" id="pilihandua" class="form-control" required>
                                <option value="" disabled>Pilih Jurusan</option>
                                <option value="TKJ">Teknik Komputer dan Jaringan</option>
                                <option value="RPL">Rekayasa Perangkat Lunak</option>
                                <option value="Perhotelan">Perhotelan</option>
                                <option value="Perkantoran">Perkantoran</option>
                                <option value="Otomotif">Otomotif</option>
                                <option value="Pertanian">Pertanian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="kartu_kip">Kartu KIP</label>
                        <div class="col-sm-11">
                              <input type="file" name="kartu_kip" id="kartu_kip" class="form-control" accept="image/*" />
        <small class="text-muted">Format: JPG, PNG, max 2MB</small>
                        </div>
                    </div>
                      <div class="row mb-3">
                        <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
