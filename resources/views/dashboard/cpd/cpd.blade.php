@extends('layouts.app')
@section('content')
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
@endsection