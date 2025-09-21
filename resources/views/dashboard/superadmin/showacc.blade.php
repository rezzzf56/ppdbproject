@extends('dashboard.superadmin.layoutcrud')
@section('content')
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                    @foreach ($users as $a )
                        <tr>
                            <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{ $a->email }}</td>
                                          </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
        

@endsection

