<!doctype html>

<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('assetcrud/assets') }}/"
  data-template="vertical-menu-template"
  data-style="light">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Superadmin</title>

    <meta name="description" content="" />

    <!-- Favicon -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

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
         <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{asset('assetcrud/assets/vendor/js/helpers.js')}}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->


    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('assetcrud/assets/js/config.js')}}"></script>
          @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body>
   @include('dashboard.superadmin.navbarcrud')
      <!-- navbar -->
  
<!-- content -->
  
    <div class="content d-flex align-items-center">
        @yield('content')
    </div>
<!-- content -->
<!-- footer-->
  @include('layouts.footer')
<!--  -->
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="{{asset('assetcrud/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/libs/node-waves/node-waves.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{asset('assetcrud/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
    <script src="{{asset('assetcrud/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assetcrud/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assetcrud/assets/js/main.js')}}"></script>

      </body>
</html>
