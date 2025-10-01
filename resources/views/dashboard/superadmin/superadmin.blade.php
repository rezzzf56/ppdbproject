@extends('dashboard.superadmin.layoutcrud')
@section('content')
<div class="container my-4">
    <!-- Header -->
    <div class="card shadow-sm mb-4">
        <div class="card-body d-flex align-items-center" style="background-color: rgb(100, 100, 242);">
            <div>
                <h4 class="mb-0 text-black">Dashboard Superadmin</h4>
                <small class="text-black">Selamat datang Anda sedang berada di Dashboard Superadmin.</small>
            </div>
        </div>
    </div>
    <!-- Summary Cards -->
    <div class="row g-3">
        <div class="col-md-4">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body" style="background-color: #ef4444;">
                    <i class="fa fa-users fa-2x text-black mb-2"></i>
                    <h6 class="text-black">Jumlah Admin</h6>
                    <h4 class="fw-bold"></h4>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body" style="background-color: #facc15">
                    <i class="fa fa-id-card fa-2x text-black mb-2"></i>
                    <h6 class="text-black">Akun dengan Profil</h6>
                    <h4 class="fw-bold"></h4>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card text-center shadow-sm border-0">
                <div class="card-body" style="background-color: #22c55e">
                    <i class="fa fa-user-times fa-2x text-black mb-2"></i>
                    <h6 class="text-black">Akun tanpa Profil</h6>
                    <h4 class="fw-bold"></h4>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Navigation -->
    <div class="row g-3 mt-4">
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card text-center shadow-sm border-0 h-100">
                    <a href="{{ route('superadmin.showacc') }}">
                    <div class="card-body" style="background-color: rgb(95, 95, 95)">
                       <i class="fa-solid fa-shield-halved fa-2x text-black mb-2"></i>
                        <h6 class="text-black">Manajemen Akun Admin</h6>
                    </div> </a>
                </div>
            </a>
        </div>
        
        <div class="col-md-3">
            <a href="" class="text-decoration-none">
                <div class="card text-center shadow-sm border-0 h-100">
                    <a href="{{ route('superadmin.showall') }}">
                    <div class="card-body" style="background-color: #9b59b6;">
                        <i class="fa fa-user-cog fa-2x text-black mb-2"></i>
                        <h6 class="text-black">Manajemen Admin</h6>
                    </div>
                </a>
                </div>
            </a>
        </div>
        
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="card text-center shadow-sm border-0 h-100">
                    <div class="card-body" style="background-color: #1abc9c;">
                        <i class="fa fa-cogs fa-2x text-black mb-2"></i>
                        <h6 class="text-black">Settings</h6>
                    </div>
                </div>
            </a>
        </div>
        
<div class="col-md-3">
    <form action="{{ route('logout') }}" method="POST" class="h-100">
        @csrf
        <button type="submit" class="w-100 h-100 border-0 bg-transparent p-0">
            <div class="card text-center shadow-sm border-0 h-100">
                <div class="card-body" style="background-color: #e67e22;">
                    <i class="fa fa-sign-out-alt fa-2x text-black mb-2"></i>
                    <h6 class="text-black">Logout</h6>
                </div>
            </div>
        </button>
    </form>
</div>
</div>
</div>
@endsection
