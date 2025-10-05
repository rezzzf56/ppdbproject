@extends('dashboard.admin.layoutadmin')
@section('content')
    <div class="container mt-5">
        <div class="card shadow-lg border-0 rounded-3">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">Detail Calon Peserta Didik</h4>
                <a href="{{ route('admin.showcpd') }}" class="btn btn-light btn-sm">Kembali</a>
            </div>

            <div class="card-body">
                {{-- ========================== DATA DIRI ========================== --}}
                <div class="row mb-4">
                    <div class="col-md-6">
                        <h5 class="fw-bold mb-3">Data Diri</h5>
                        <p><strong>Nama Lengkap:</strong> {{ $cpd->nama_lengkap }}</p>
                        <p><strong>NIK:</strong> {{ $cpd->nik }}</p>
                        <p><strong>Email:</strong> {{ $cpd->user->email ?? '-' }}</p>
                        <p><strong>Jurusan Pilihan 1:</strong> {{ $cpd->pilihansatu ?? '-' }}</p>
                        <p><strong>Jurusan Pilihan 2:</strong> {{ $cpd->pilihandua ?? '-' }}</p>
                        <p><strong>Jalur Pendaftaran:</strong> {{ ucfirst($cpd->jalur_pendaftaran) ?? 'Belum dipilih' }}</p>
                        <p><strong>Status:</strong>
                            @if ($cpd->status == 'active')
                                <span class="badge bg-success">Aktif</span>
                            @elseif($cpd->status == 'pending')
                                <span class="badge bg-warning text-dark">Menunggu Verifikasi</span>
                            @else
                                <span class="badge bg-danger">Ditolak</span>
                            @endif
                        </p>
                    </div>

                    <div class="col-md-6">
                        <h5 class="fw-bold mb-3">Nilai & Keterangan</h5>
                        <p><strong>NEM / Rata-rata Nilai:</strong> {{ $cpd->nem ?? '-' }}</p>

                        @if ($cpd->jalur_pendaftaran == 'zonasi')
                            <p><strong>Jarak Rumah:</strong> {{ $cpd->zonasi->jarak_rumah ?? '-' }} km</p>
                        @elseif ($cpd->jalur_pendaftaran == 'prestasi')
                            <p><strong>Prestasi:</strong> {{ $cpd->prestasi->prestasi ?? '-' }}</p>
                        @elseif ($cpd->jalur_pendaftaran == 'afirmasi')
                            <p><strong>Kartu KIP:</strong> {{ $cpd->afirmasi->kartu_kip ?? '-' }}</p>
                        @endif
                    </div>
                </div>

                <hr>

                <h5 class="fw-bold mb-3">Berkas Pendaftaran</h5>
                @if (!empty($cpd->berkas_path))
                    <a href="{{ asset('storage/' . $cpd->berkas_path) }}" target="_blank"
                        class="btn btn-sm btn-outline-primary">
                        Lihat Berkas
                    </a>
                @else
                    <p class="text-muted">Belum ada berkas diunggah.</p>
                @endif

                <hr>

                <h5 class="fw-bold mb-3">Token Login</h5>
                @if ($cpd->user->login_token)
                    <p><strong>Token:</strong> <span class="text-primary">{{ $cpd->user->login_token }}</span></p>
                    <p><strong>Berlaku sampai:</strong>
                        {{ $cpd->user->token_expires_at ? $cpd->user->token_expires_at->format('d M Y H:i') : '-' }}</p>
                @else
                    <p class="text-muted">Belum ada token yang dibuat.</p>
                @endif

                <form method="POST" action="{{ route('admin.generateToken', $cpd->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-dark mt-2">Generate Token Baru</button>
                </form>


                <hr>

                <div class="d-flex justify-content-end mt-4 gap-2">
                    @if ($cpd->status == 'pending')
                        <form method="POST" action="{{ route('admin.verifyCpd', $cpd->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-success">Verifikasi</button>
                        </form>
                        <form method="POST" action="{{ route('admin.rejectCpd', $cpd->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-danger">Tolak</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
