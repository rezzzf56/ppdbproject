@extends('layouts.app')
@section('content')
  <section class="text-center py-5 w-100 m-0" style="background-image: url('{{ asset('images/skirk1.jpg') }}'); background-size: cover;">
      <h1 class="fw-bold text-black">Penerimaan Peserta Didik Baru (PPDB)</h1>
      <p class="lead text-black">Tahun Ajaran 2025/2026</p>
      <a href="#" class="btn btn-light btn-lg mt-3">Daftar Sekarang</a>
  </section>
@endsection
@section('section-counter')
  <div class="container my-5">
  <div class="card shadow-lg border-0 position-relative">
    <!-- Ikon Kalender -->
    <div class="position-absolute top-0 end-0 p-3">
      <i class="fas fa-calendar-alt fa-2x text-primary"></i>
    </div>

    <div class="card-body">
      <h4 class="card-title fw-bold">📅 Jadwal Pendaftaran</h4>
      <p class="card-text text-muted">Penerimaan Peserta Didik Baru Tahun Ajaran 2025/2026</p>

      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <strong>Pendaftaran Online:</strong> 1 Mei – 15 Mei 2025
        </li>
        <li class="list-group-item">
          <strong>Verifikasi Berkas:</strong> 16 Mei – 20 Mei 2025
        </li>
        <li class="list-group-item">
          <strong>Pengumuman:</strong> 25 Mei 2025
        </li>
        <li class="list-group-item">
          <strong>Daftar Ulang:</strong> 26 Mei – 30 Mei 2025
        </li>
      </ul>
    </div>
  </div>
</div>

@endsection