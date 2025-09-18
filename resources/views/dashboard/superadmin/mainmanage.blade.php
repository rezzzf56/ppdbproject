@extends('dashboard.superadmin.layoutcrud')
@section('content')
                <div class="card-body">
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
        @else 
            <a href="{{ route('superadmin.link', $a->id) }}" class="btn btn-primary">Hubungkan Akun</a>
        @endif
                      </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
        

@endsection
