@extends('layouts.app')
@section('content')
<div class="container">
    <div id="contentBox" class="container my-5">
  <div class="card shadow">
    <div class="card-body">
      <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicator (bullets) -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#imageCarousel" data-bs-slide-to="2"></button>
        </div>

        <!-- Images -->
        <div class="carousel-inner rounded">
          <div class="carousel-item active">
            <img src="images/hero_1.jpg" class="d-block w-100" alt="Gambar 1">
          </div>
          <div class="carousel-item">
            <img src="images/hero_2.jpg" class="d-block w-100" alt="Gambar 2">
          </div>
          <div class="carousel-item">
            <img src="images/hero_3.jpg" class="d-block w-100" alt="Gambar 3">
          </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </div>
</div>

</div>
@endsection