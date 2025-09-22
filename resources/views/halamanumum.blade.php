@extends('layouts.app')
@section('fullwidth')
<!-- Full Width Carousel -->
<div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/skirk1.jpg') }}" class="d-block w-100 carousel-img" alt="Gambar 1">
 <div class="carousel-caption text-left mb-5">
        <h1 class="font-weight-bold">Mendidik dengan Hati,</h1>
        <h1 class="font-weight-bold">Mengajar dengan Dedikasi</h1>
        <p>Komitmen guru untuk membimbing, mengarahkan, dan mendukung siswa dalam proses pembelajaran mereka.</p>
      </div>     
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/moskow.jpg') }}" class="d-block w-100 carousel-img" alt="Gambar 2">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/balijpg.jpg') }}" class="d-block w-100 carousel-img" alt="Gambar 3">
    </div>
  </div>

  <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
@endsection

@section('content')
<div class="container my-5">
  <div class="row align-items-center">
    
    <!-- Kolom Teks -->
    <div class="col-md-7">
      <h1 class="font-weight-bold mb-3">Selamat Datang di PPDB 2025</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
      </p>
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
         magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      </p>
    </div> 

    <!-- Kolom Gambar -->
    <div class="col-md-5 text-center">
      <img src="{{ asset('images/skirk1.jpg') }}" alt="proses_pendaftaran"
           class="img-fluid" style="max-height: 500px;">
    </div> 
  </div>
</div>
<!-- Counter Section -->
<div class="counter-section text-white">
  <div class="overlay"></div>
  <div class="container py-5">
    <div class="row text-center">
      
      <div class="col-md-3">
        <h2 class="counter" data-target="500">0</h2>
        <p>Kuota PPDB</p>
      </div>
      
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>TKJ</p>
      </div>
      
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>RPL</p>
      </div>
      
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>Perhotelan</p>
      </div>
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>Perkantoran</p>
      </div>
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>Perhotelan</p>
      </div>
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>Otomotif</p>
      </div>
      <div class="col-md-3">
        <h2 class="counter" data-target="72">0</h2>
        <p>Pertanian</p>
      </div>
    </div>
  </div>
</div>
@endsection
