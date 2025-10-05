@extends('dashboard.admin.layoutadmin')
@section('content')
<div class="card-body mt-5 mx-7">
    <div class="table-responsive text-nowrap">
        <form method="GET" action="{{ route('admin.showcpd') }}" class="mb-3 d-flex flex-wrap gap-2">
            <input type="text" name="search" class="form-control w-auto" placeholder="Cari nama..."
                value="{{ request('search') }}">

            <select name="jalur" class="form-select w-auto">
                <option value="">Semua Jalur</option>
                <option value="zonasi" {{ request('jalur') == 'zonasi' ? 'selected' : '' }}>Zonasi</option>
                <option value="afirmasi" {{ request('jalur') == 'afirmasi' ? 'selected' : '' }}>Afirmasi</option>
                <option value="prestasi" {{ request('jalur') == 'prestasi' ? 'selected' : '' }}>Prestasi</option>
            </select>

            <select name="jurusan" class="form-select w-auto">
                <option value="">Semua Jurusan</option>
                @foreach (['TKJ', 'RPL', 'Perhotelan', 'Perkantoran', 'Otomotif', 'Pertanian'] as $j)
                    <option value="{{ $j }}" {{ request('jurusan') == $j ? 'selected' : '' }}>{{ $j }}</option>
                @endforeach
            </select>

            <select name="sort" class="form-select w-auto">
                <option value="terbaru" {{ request('sort') == 'terbaru' ? 'selected' : '' }}>Terbaru</option>
                <option value="terlama" {{ request('sort') == 'terlama' ? 'selected' : '' }}>Terlama</option>
            </select>

            <button type="submit" class="btn btn-primary">Terapkan</button>
            <a href="{{ route('admin.showcpd') }}" class="btn btn-danger">Reset</a>
        </form>

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jalur</th>
                    <th>Pilihan 1</th>
                    <th>Pilihan 2</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($admin as $a)
                    <tr>
                        <td>{{ $admin->firstItem() + $loop->index }}</td>
                        <td>{{ $a->nama_lengkap }}</td>
                        <td>{{ ucfirst($a->jalur_pendaftaran) }}</td>
                        <td>{{ $a->pilihansatu }}</td>
                        <td>{{ $a->pilihandua }}</td>
                        <td>
                         <a href="{{ route('detailcpd.show', $a->id )}}" class="btn btn-info">Detail</a> 
                         <a href="" class="btn btn-primary">Edit</a>
                              <form action="" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Yakin mau hapus data ini?')">Hapus</button>
                                    </form>
                                    </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted">Tidak ada data ditemukan</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="mt-3 d-flex justify-content-center">
            {{ $admin->links() }}
        </div>
    </div>
</div>
@endsection
