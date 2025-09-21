@extends('dashboard.superadmin.layoutcrud')
@section('content')
       <div class="collapse show">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Data</th>
                        <th class="text-center"></th>
                        <th>Details</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>Nama</td>
                        <td class="text-center">
                        :
                        </td>
            
                            <td>
                              {{ $profilesadmin->nama }}
                        </td>
                      </tr>
                      <tr>
                        <td>Email Pribadi</td>
                        <td class="text-center">
                            :
                        </td>
                        <td>{{$profilesadmin->email}}</td>
                      </tr>
                      <tr>
                        <td>Email Login</td>
                        <td class="text-center">
                         :
                        </td>
                        <td>{{$profilesadmin->user->email}}
                        </td>
                        </tr>
                        <tr>
                        <td>Password</td>
                        <td class="text-center">
                        :
                        </td>
                        <td>{{$profilesadmin->user->password}}
                        </td>
                        </tr>
                    </tbody>
                  </table>
                 <a href="{{ route('superadmin.showall') }}" class="btn btn-secondary mx-3">kembali</a>
                    </div>
                  </div>
                </div>
@endsection