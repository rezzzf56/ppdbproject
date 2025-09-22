@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card w-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Daftar</h5>
                <small class="text-muted float-end"></small>
            </div>
            <div class="card-body mt-2">
                <form>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nik">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" id="nik" class="form-control" placeholder="Isi dengan NIK" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nis">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" id="nis" class="form-control" placeholder="Isi dengan NIS" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_lengkap" class="form-control"
                                    placeholder="Isi dengan nama lengkap" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <select name="user_id" id="user_id" class="form-control" required>
                                    <option value="" disabled>Pilih Akun</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Tanggal Lahir</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                    </div>
                        </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_lengkap" class="form-control"
                                    placeholder="Isi dengan alamat" />
                            </div>
                        </div>
                           <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_lengkap" class="form-control"
                                    placeholder="Isi Asal Sekolah" />
                            </div>
                        </div>
                           <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Nomor Telepon</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_lengkap" class="form-control"
                                    placeholder="Isi dengan Nomor Telepon" />
                            </div>
                        </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Email</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_lengkap" class="form-control"
                                    placeholder="Isi dengan Email" />
                            </div>
                        </div>
                          <div class="row mb-3">
                            <label class="col-sm-2 col-form-label text-sm-end" for="nama">Nama org tua</label>
                            <div class="col-sm-10">
                                <input type="text" id="nama_lengkap" class="form-control"
                                    placeholder="Isi dengan alamat" />
                            </div>
                        </div>
                        
                    </form>
            </div>
        </div>
    </div>
    </div>
@endsection
