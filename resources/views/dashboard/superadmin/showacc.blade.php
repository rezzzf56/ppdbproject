@extends('dashboard.superadmin.layoutcrud')
@section('content')
    <div class="card-body mt-5 mx-7">
        <div class="table-responsive text-nowrap">
            <form method="GET" action="{{ route('superadmin.showacc') }}" class="mb-3 d-flex gap-2">
                <input type="text" name="search" class="form-control" placeholder="Cari email..."
                    value="{{ request('search') }}">  
                <select name="sort" class="form-select">
                    <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Data Terbaru</option>
                    <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Data Terlama</option>
                </select>
                <button type="submit" class="btn btn-primary">Terapkan</button>
                <a href="{{ route('superadmin.showacc') }}" class="btn btn-danger">Reset</a>
            </form>
            <table class="table table-bordered border-dark ">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($users->count() > 0)
                        @foreach ($users as $a)
                            <tr>
                            <tr>
                                <th>{{ $users->firstItem() + $loop->index }}</th>
                                <td>{{ $a->email }}</td>
                            </tr>
                        @endforeach
                </tbody>
            @else
                <tr>
                    <td colspan="3" class="text-center text-muted">Hasil pencarian tidak tersedia</td>
                </tr>
                @endif
            </table>

        </div>
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
