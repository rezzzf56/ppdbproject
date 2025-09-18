@extends('dashboard.superadmin.link')
@section('content')
<div class="container">
  @extends('dashboard.superadmin.layoutcrud')
@section('content')
    <div class="card mb-6">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h3>Tambah Admin</h3>
        </div>
        <div class="card-body">
            <form action={{ route('superadmin.storelink') }} method="POST">
                @csrf
                <div class="row my-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="basic-default-name"
                            placeholder="Isi nama admin" />
                    </div>
                </div>
                <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="basic-default-company"
                            placeholder="Email" />
                    </div>
                </div>
                  <div class="row mb-6">
                    <label class="col-sm-2 col-form-label" for="basic-default-company">Akun User</label>
                    <div class="col-sm-10">
                          <select name="user_id" id="user_id" class="form-control" required>
                   <option value="" disabled>-- Pilih User --</option>
            @foreach($users as $user)
                <option value="{{ $user->id }}">
                    Email: {{ $user->email }} | Password: {{ $user->password }}
                </option>
            @endforeach
        </select>
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
@endsection

</div>
@endsection