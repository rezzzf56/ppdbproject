<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="container mt-5">
      <h1 class="text-center mb-5">Pilih Jalur Pendaftaran</h1>
  <div class="row g-4">
    
    <!-- Jalur Zonasi -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Jalur Zonasi</h5>
          <p class="card-text">
            Pendaftaran berdasarkan jarak tempat tinggal ke sekolah.
          </p>
         <form action="{{ route('simpanJalur') }}" method="POST" class="d-inline">
    @csrf
    <input type="hidden" name="jalur_pendaftaran" value="zonasi">
    <button type="submit" class="btn btn-primary">Pilih Jalur</button>
</form>

        </div>
      </div>
    </div>

    <!-- Jalur Afirmasi -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Jalur Prestasi</h5>
          <p class="card-text">
            Pendaftaran khusus untuk siswa dari keluarga kurang mampu.
          </p>
        <form action="{{ route('simpanJalur') }}" method="POST" class="d-inline">
    @csrf
    <input type="hidden" name="jalur_pendaftaran" value="prestasi">
    <button type="submit" class="btn btn-secondary">Pilih Jalur</button>
</form>

        </div>
      </div>
    </div>

    <!-- Jalur Prestasi -->
    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Jalur Afirmasi</h5>
          <p class="card-text">
            Pendaftaran berdasarkan prestasi akademik maupun non-akademik.
          </p>
         <form action="{{ route('simpanJalur') }}" method="POST" class="d-inline">
    @csrf
    <input type="hidden" name="jalur_pendaftaran" value="afirmasi">
    <button type="submit" class="btn btn-warning">Pilih Jalur</button>
</form>

        </div>
      </div>
    </div>

  </div>
</div>

</body>
</html>