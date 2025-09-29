@extends('dashboard.admin.layoutadmin')
@section('content')
    <div class="card-body mt-5 mx-7">
        <div class="table-responsive text-nowrap">
            <form method="GET" action="{{ route('admin.showcpd') }}" class="mb-3 d-flex gap-2">
                <input type="text" name="search" class="form-control" placeholder="Cari nama atau email..."
                    value="{{ request('search') }}">
                <select name="sort" class="form-select">
                    <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Data Terbaru</option>
                    <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Data Terlama</option>
                </select>
                <button type="submit" class="btn btn-primary">Terapkan</button>
                <a href="{{ route('admin.showcpd') }}" class="btn btn-danger">Reset</a>
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                     @if ($admin->count() > 0)
                    @foreach ($admin as $a)
                        <tr>
                            <th>{{ $admin->firstItem() + $loop->index }}</th>
                            <td>{{ $a->nama_lengkap }}</td>
                        </tr>
                    @endforeach
                      @else
                <tr>
                    <td colspan="3" class="text-center text-muted">Hasil pencarian tidak tersedia</td>
                </tr>
                @endif
                </tbody>
            </table>
            <div class="mt-3 d-flex justify-content-center">
                {{ $admin->links() }}
            </div>

        </div>
    </div>
@endsection
