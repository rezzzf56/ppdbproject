@include('layouts.app')
@section('content')
  <section class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1 class="fw-bold">Penerimaan Peserta Didik Baru (PPDB)</h1>
      <p class="lead">Tahun Ajaran 2025/2026</p>
      <a href="#" class="btn btn-light btn-lg mt-3">Daftar Sekarang</a>
    </div>
  </section>

  <div class="container my-5">

    <!-- Timeline / Jadwal -->
    <h3 class="mb-4">📅 Jadwal Pendaftaran</h3>
    <ul class="list-group mb-5">
      <li class="list-group-item">Pendaftaran: 1 Juni - 15 Juni 2025</li>
      <li class="list-group-item">Seleksi Administrasi: 16 - 18 Juni 2025</li>
      <li class="list-group-item">Pengumuman: 20 Juni 2025</li>
      <li class="list-group-item">Daftar Ulang: 21 - 25 Juni 2025</li>
    </ul>

    <!-- Syarat Pendaftaran -->
    <h3 class="mb-4">📂 Syarat Pendaftaran</h3>
    <div class="row g-3 mb-5">
      <div class="col-md-6">
        <div class="card p-3">
          <ul class="mb-0">
            <li>Fotokopi Kartu Keluarga</li>
            <li>Fotokopi Akta Kelahiran</li>
            <li>Pas Foto 3x4 (3 lembar)</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card p-3">
          <ul class="mb-0">
            <li>Fotokopi Ijazah / SKL</li>
            <li>Formulir Pendaftaran</li>
            <li>Berkas lain sesuai ketentuan</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Alur Pendaftaran -->
    <h3 class="mb-4">🛠️ Alur Pendaftaran</h3>
    <div class="row text-center g-4 mb-5">
      <div class="col-md-2"><div class="card p-3">1. Daftar Online</div></div>
      <div class="col-md-2"><div class="card p-3">2. Upload Berkas</div></div>
      <div class="col-md-2"><div class="card p-3">3. Seleksi</div></div>
      <div class="col-md-2"><div class="card p-3">4. Pengumuman</div></div>
      <div class="col-md-2"><div class="card p-3">5. Daftar Ulang</div></div>
    </div>

    <!-- Kuota Pendaftaran -->
    <h3 class="mb-4">📊 Kuota Pendaftaran</h3>
    <table class="table table-bordered mb-5">
      <thead class="table-dark">
        <tr>
          <th>Jalur</th>
          <th>Kuota</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Zonasi</td><td>50%</td></tr>
        <tr><td>Prestasi</td><td>20%</td></tr>
        <tr><td>Afirmasi</td><td>15%</td></tr>
        <tr><td>Perpindahan Orang Tua</td><td>15%</td></tr>
      </tbody>
    </table>

    <!-- FAQ -->
    <h3 class="mb-4">❓ FAQ (Pertanyaan Umum)</h3>
    <div class="accordion mb-5" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            Apakah pendaftaran bisa dilakukan offline?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Ya, calon siswa bisa datang langsung ke sekolah untuk mengambil formulir.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Bagaimana cara melihat hasil seleksi?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Hasil seleksi dapat dilihat melalui website ini pada menu "Pengumuman".
          </div>
        </div>
      </div>
    </div>

    <!-- Kontak -->
    <h3 class="mb-4">📞 Kontak & Lokasi</h3>
    <div class="card p-3 mb-5">
      <p>Email: <a href="mailto:ppdb@sekolah.sch.id">ppdb@sekolah.sch.id</a></p>
      <p>Telepon: 0812-3456-7890</p>
      <p>Alamat: Jl. Pendidikan No. 123, Kota Pendidikan</p>
      <iframe src="https://maps.google.com/maps?q=Jakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" 
              width="100%" height="250" style="border:0;" allowfullscreen></iframe>
    </div>

  </div>
@endsection