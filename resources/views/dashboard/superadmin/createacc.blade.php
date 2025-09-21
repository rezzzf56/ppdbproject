@extends('dashboard.superadmin.layoutcrud')
@section('content')
    <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3>Tambah Admin</h3>
        </div>
        <div class="card-body">
            <form action={{ route('superadminsaveacc.store') }} method="POST">
                @csrf
                <div class="row my-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="basic-default-name"
                            placeholder="Isi email" />
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                    <div class="col-sm-10">
                        <input type="text" name="password" class="form-control" id="basic-default-company"
                            placeholder="password" />
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div> 
                <input type="hidden" name="role" value="admin">
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="{{ route('super.dashboard') }}" class="btn btn-secondary">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
