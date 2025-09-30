@extends('dashboard.superadmin.layoutcrud')
@section('content')
    <div class="card-body mt-5 mx-7">
        <div class="table-responsive text-nowrap">
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="multi-select-col" style="display:none;">
                            <input type="checkbox" id="select-all">
                        </th>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($superadmin->count() > 0)
                        @foreach ($superadmin as $a)
                            <tr>
                                <th>{{ $superadmin->firstItem() + $loop->index }}</th>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->email }}</td>
                                <td>
                                    @if ($a->user_id)
                                        <a href="{{ route('superadmin.detail', $a->id) }}"
                                            class="btn btn-secondary">Detail</a>
                                        <form action="{{ route('superadmin.unlink', $a->id) }}" method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('Yakin ingin memutuskan kaitan akun?')">
                                            @csrf
                                            <button type="submit" class="btn btn-warning">Putuskan Kaitan</button>
                                        </form>
                                        <a href="{{ route('superadmin.editprofilesadm', $a->id) }}"
                                            class="btn btn-primary">Edit</a>
                                    @else
                                        <a href="{{ route('superadmin.link', $a->id) }}" class="btn btn-primary">Hubungkan
                                            Akun</a>
                                        <form action="{{ route('superadmin.deleteprofilesadmin', $a->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="return confirm('Yakin mau hapus data ini?')">Hapus Admin</button>
                                        </form>
                                    @endif
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
                {{ $superadmin->links() }}
            </div>
            
        </div>
    </div>
@endsection
@push('styles')
<style>
  tr.selected-row {
    background-color: #f0f4ff; 
}
.row-checkbox {
    margin-right: 6px;
} 
</style>

@endpush