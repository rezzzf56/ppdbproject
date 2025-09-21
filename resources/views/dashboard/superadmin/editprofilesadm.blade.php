@extends('dashboard.superadmin.layoutcrud')
@section('content')
<div class="container">

    <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3>Edit Admin</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('superadmin.updateprofilesadm') }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $profilesadmin->id }}">
                <div class="row my-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="basic-default-name"
                            placeholder="Isi nama admin" value="{{ $profilesadmin->nama }}" />
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="basic-default-company"
                            placeholder="Email" value="{{ $profilesadmin->email }}" />
                    </div>
                </div>
                  <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Akun Login Admin</label>
                    <div class="col-sm-10">
                          <select name="user_id" id="user_id" class="form-control" required>
                   <option value="" disabled>Pilih Akun</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}" {{ $profilesadmin->user_id == $user->id ? 'selected' : '' }}>
                 {{ $user->email }}
                </option>
            @endforeach
        </select>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                        <a href="{{ route('superadmin.showall') }}" class="btn btn-secondary">kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
\
</div>
@endsection