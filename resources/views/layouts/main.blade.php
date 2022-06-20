<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link menuju font-awesone -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

    <!-- Link menuju CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap-reboot.min.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap-theme.min.css') }}" rel="stylesheet">

    <title>Prediksi Penyakit</title>
  </head>
  <body>
    <div class="container">
        {{-- Navbar --}}
        @include('layouts/partials.navbar_admin')
        
        {{-- Cards --}}
        @include('layouts/partials.cards')

        {{-- Cards --}}
        @include('layouts/partials.modals')

        {{-- Content --}} 
        <div style="background:#faf8f8;margin-top:20px;padding:10px">
          @yield('container')
        </div>
    </div>


    {{-- Jquery --}}
    <script src="{{ asset('jquery.slim.min.js') }}"></script>
    
    <!-- JS Popper -->
    <script src="{{ asset('popper.min.js') }}"></script>
    
    <!-- JS Bootstrap -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- Content --}} 
    @yield('script')
  </body>
</html>