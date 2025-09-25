@extends('dashboard.superadmin.layoutcrud')
@section('content')
                <div class="card-body mt-5 mx-7">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach ($superadmin as $a )
                        <tr>
                            <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{ $a->nama }}</td>
                    <td>{{ $a->email }}</td>
                    <td>
                          @if($a->user_id) 
            <a href="{{ route('superadmin.detail', $a->id) }}" class="btn btn-secondary">Detail</a>
             <form action="{{ route('superadmin.unlink', $a->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin memutuskan kaitan akun?')">
        @csrf
        <button type="submit" class="btn btn-warning">Putuskan Kaitan</button>
    </form>
                <a href="{{ route('superadmin.editprofilesadm', $a->id) }}" class="btn btn-primary">Edit</a>

        @else 
            <a href="{{ route('superadmin.link', $a->id) }}" class="btn btn-primary">Hubungkan Akun</a>
                <form action="{{ route('superadmin.deleteprofilesadmin', $a->id) }}" method="POST" style="display:inline-block;">
                          @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Yakin mau hapus data ini?')">Hapus Admin</button>
                        </form> 
        @endif
                      </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
        

@endsection
