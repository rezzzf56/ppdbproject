<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
       <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/fonts/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/fonts/tabler-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/fonts/flag-icons.css')}}" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />

    <link rel="stylesheet" href="{{asset('assetcrud/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/libs/node-waves/node-waves.css')}}" />

    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <link rel="stylesheet" href="{{asset('assetcrud/assets/vendor/libs/apex-charts/apex-charts.css')}}" />

     <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
     <link rel="stylesheet" href="{{asset('css/slidecarousel.css')}}">
     <link rel="stylesheet" href="{{asset('css/count.css')}}">
     <link rel="stylesheet" href="{{asset('css/loginform.css')}}">




    <title>PPDB Online</title>
      @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <!-- navbar -->
    @include('layouts.navbar')
      <!-- navbar -->
  
<!-- content -->
   @if(View::hasSection('fullwidth'))
       
    <span class="mt-3">@yield('fullwidth')</span>
    @endif
    <div class="content d-flex align-items-center">
        @yield('content')
    </div>
    @yield('section-counter')
<!-- content -->
<!-- footer-->
  @include('layouts.footer')
<!--  -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/countsetting.js')}}"></script>
    <script src="{{asset('js/form-utils.js')}}"></script>



  </body>
</html>