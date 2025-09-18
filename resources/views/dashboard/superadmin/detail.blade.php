@extends('dashboard.superadmin.layoutcrud')
@section('content')
       <div class="collapse show">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Data</th>
                        <th class="text-center">Icon</th>
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
                              {{ $users->profilesadmin->nama }}
                        </td>
                      </tr>
                      <tr>
                        <td>Email Pribadi</td>
                        <td class="text-center">
                            :
                        </td>
                        <td>{{$users->profilesadmin->email}}</td>
                      </tr>
                      <tr>
                        <td>Email Login</td>
                        <td class="text-center">
                         :
                        </td>
                        <td>@if($users->email){{$users->email}}
                        @else Belum terhubung
                        @endif</td>
                      </tr>
                      <tr>
                        <td>Password login</td>
                        <td class="text-center">
                          <i class="tf-icons ti ti-x ti-sm"></i>
                        </td>
                        <td>@if($users->password){{$users->password}}
                        @else Belum terhubung
                        @endif</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
@endsection