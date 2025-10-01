@extends('dashboard.superadmin.layoutcrud')
@section('content')
<div class="card-body mt-5 mx-7">
    <div class="mb-3">
        <form method="GET" action="{{ route('superadmin.showall') }}" class="mb-3 d-flex gap-2">
            <input type="text" name="search" class="form-control" placeholder="Cari nama atau email..."
                   value="{{ request('search') }}">
            <select name="sort" class="form-select">
                <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Data Terbaru</option>
                <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Data Terlama</option>
            </select>
            <button type="submit" class="btn btn-primary">Terapkan</button>
            <a href="{{ route('superadmin.showall') }}" class="btn btn-danger">Reset</a>
        </form>
    </div>

    @if ($superadmin->count() > 0)
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($superadmin as $a)
                @php
                    $colors = ['bg-danger text-white', 'bg-success text-white', 'bg-warning text-dark', 'bg-secondary text-white'];
                    $colorClass = $colors[$loop->index % count($colors)];
                @endphp
                <div class="col">
                    <div class="card shadow-sm h-100 {{ $colorClass }}">
                        <div class="card-body d-flex flex-column">
                            <div class="mb-3 text-center">
                                <div class="rounded-circle bg-dark text-light d-inline-flex align-items-center justify-content-center" 
                                     style="width:60px;height:60px;font-size:20px;">
                                    {{ strtoupper(substr($a->nama, 0, 1)) }}
                                </div>
                            </div>
                            <h5 class="card-title text-center">{{ $a->nama }}</h5>
                            <p class="card-text text-black text-center">{{ $a->email }}</p>

                            <div class="mt-auto d-flex flex-wrap gap-2 justify-content-center">
                                @if ($a->user_id)
                                    <a href="{{ route('superadmin.detail', $a->id) }}" class="btn btn-sm btn-light">Detail</a>
                                    <form action="{{ route('superadmin.unlink', $a->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin memutuskan kaitan akun?')">
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-dark">Putuskan</button>
                                    </form>
                                    <a href="{{ route('superadmin.editprofilesadm', $a->id) }}" class="badge bg-light text-dark p-2"">Edit</a>
                                @else
                                    <a href="{{ route('superadmin.editprofilesadm', $a->id) }}" class="btn btn-sm btn-light">Edit</a>
                                    <a href="{{ route('superadmin.link', $a->id) }}" class="btn btn-sm btn-light">Hubungkan</a>
                                    <form action="{{ route('superadmin.deleteprofilesadmin', $a->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-dark"
                                            onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-4 d-flex justify-content-center">
            {{ $superadmin->links() }}
        </div>
    @else
        <div class="text-center text-muted mt-4">
            Hasil pencarian tidak tersedia
        </div>
    @endif
</div>
@endsection

@push('styles')
<style>
.card {
    border-radius: 12px;
    transition: 0.2s ease;
}
.card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}
input[name="search"] {
    border: 2px solid #3f3f3f; 
    border-radius: 8px;       
}
input[name="search"]:focus {
    border-color: #0d6efd;  
    box-shadow: 0 0 6px rgba(25, 135, 84, 0.5);
}
select[name="sort"]{
     border: 2px solid #3f3f3f; 
    border-radius: 8px;      
}
select[name="sort"]:focus{
    border-color: #0d6efd;  
    box-shadow: 0 0 6px rgba(25, 135, 84, 0.5);
}
</style>
@endpush
