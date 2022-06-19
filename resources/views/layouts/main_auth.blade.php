<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Icon --}}
    <link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico') }}">

    <!-- Link Animate.css -->
    <link href="{{ asset('login/vendor/animate/animate.css') }}" rel="stylesheet">

    <!-- Link menuju CSS -->
    <link href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Link menuju CSS -->
    <link href="{{ asset('login/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('login/css/util.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- humbergers CSS -->
    <link href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet">

    <!-- Select2 CSS -->
    <link href="{{ asset('login/vendor/select2/select2.min.css') }}" rel="stylesheet">

    <title>Prediksi Penyakit</title>
  </head>
  <body>
    
    {{-- Content --}} 
    @yield('container')


    {{-- Jquery --}}
    <script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    
    <!-- JS Popper -->
    <script src="{{ asset('login/vendor/bootstrap/js/popper.js') }}"></script>
    
    <!-- Select2 JS -->
    <script src="{{ asset('login/vendor/select2/select2.min.js') }}"></script>

    <!-- JS Bootstrap -->
    <script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    {{-- Tilt .js --}}
    <script src="{{ asset('login/vendor/tilt/tilt.jquery.min.js') }}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

    {{-- Main js --}}
    <script src="js/main.js"></script>
  </body>
</html>