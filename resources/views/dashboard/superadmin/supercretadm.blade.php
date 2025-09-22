@extends('dashboard.superadmin.layoutcrud')
@section('content')
    <div class="container-fluid mt-5">
        <div class="card w-100">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Tambah admin</h5>
                <small class="text-muted float-end"></small>
            </div>
            <div class="card-body">
 <form action={{ route('superadmincreate.store') }} method="POST">
                @csrf
                <div class="row my-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="basic-default-name"
                            placeholder="Isi nama admin" />
                            @error('nama')
                           <span class="text-danger"> {{ $message }} </span>
                            @enderror
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="basic-default-company"
                            placeholder="Email" />
                              @error('email')
                           <span class="text-danger"> {{ $message }} </span>
                            @enderror
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="{{ route('super.dashboard') }}" class="btn btn-secondary">kembali</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
