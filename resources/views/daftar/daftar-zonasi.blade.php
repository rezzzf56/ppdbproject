@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card w-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Daftar</h5>
                <small class="text-muted float-end"></small>
            </div>
            <div class="card-body mt-2">
                <form action="{{route('form.storereg')}}" method="POST">
                    @csrf
                    <div class="row mb-3 align-items-center">
                   <label class="col-sm-1 col-form-label text-sm-start" for="nik">NIK</label>
                   <div class="col-sm-11">                      
                            <input type="text" name="nik" id="nik" class="form-control"
                                placeholder="Isi dengan NIK" />
                                   @error('nik')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                         <label class="col-sm-1 col-form-label text-sm-start"  for="nis">NIS</label>
                   <div class="col-sm-11">   
                            <input type="text" name="nis" id="nis" class="form-control"
                                placeholder="Isi dengan NIS" />
                                 @error('nis')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                          
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="nama_lengkap">Nama</label>
                        <div class="col-sm-11">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" data-capitalize="words" class="form-control"" 
                                placeholder="Isi dengan nama lengkap" />
                                   @error('nama_lengkap')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
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
                            <input type="text" name="alamat" id="alamat" data-capitalize="words" class="form-control"
                                placeholder="Isi dengan alamat" />
                                   @error('alamat')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="asal_sekolah">Asal Sekolah</label>
                        <div class="col-sm-11">
                            <input type="text" name="asal_sekolah" id="asal_sekolah" data-capitalize="words" class="form-control"
                                placeholder="Isi Asal Sekolah" />
                                   @error('asal_sekolah')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="nomor_telepon">Nomor Telepon</label>
                        <div class="col-sm-11">
                            <input type="text" name="nomor_telepon" id="nomor_telepon" class="form-control"
                                placeholder="Isi dengan Nomor Telepon" />
                                   @error('nomor_telepon')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="namaorgtua">Nama orang tua</label>
                        <div class="col-sm-11">
                            <input type="text" name="namaorgtua" id="namaorgtua" data-capitalize="words" class="form-control"
                                placeholder="Isi dengan Nama Orang Tuamu" />
                                   @error('namaorgtua')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="pekerjaanorgtua">Pekerjaan Orang Tua</label>
                        <div class="col-sm-11">
                            <input type="text" name="pekerjaanorgtua" id="pekerjaanorgtua" data-capitalize="words" class="form-control"
                                placeholder="Isi dengan Pekerjaan Orang Tuamu" />
                                   @error('pekerjaanorgtua')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
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
                               @error('pilihandua')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                      <div class="row mb-3 align-items-center">
                        <label class="col-sm-1 col-form-label text-sm-start" for="nem">NEM</label>
                        <div class="col-sm-11">
                            <input type="text" name="nem" id="nem" data-capitalize="words" class="form-control"
                                placeholder="Isi dengan NEM" />
                                   @error('nem')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-1 col-form-label text-sm-start" for="jarak_rumah">Jarak Rumah</label>
                        <div class="col-sm-11">
                            <input type="text" name="jarak_rumah" id="jarak_rumah" class="form-control"
                                placeholder="Isi dengan Jarak Rumah" />
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
