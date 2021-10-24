<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/vendor/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/vendor/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<!-- favicon -->

	<title>Yamaduta</title>
</head>
<body>

    <div>
        @include('yamaduta.includes.header')
        @yield('content')
        @include('yamaduta.includes.footer')
    </div>
			
	<!-- jQuery -->
<script src="{{asset('js/vendor/jquery-1.11.1.min.js')}}"></script>
<!-- XM Accordion -->
<script src="{{asset('js/vendor/jquery.xmaccordion.min.js')}}"></script>
<!-- Owl Carrousel -->
<script src="{{asset('js/vendor/owl.carousel.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/vendor/jquery.magnific-popup.min.js')}}"></script>
<!-- imgLiquid -->
<script src="{{asset('js/vendor/imgLiquid-min.js')}}"></script>
<!-- Header -->
<script src="{{asset('js/header.js')}}"></script>
<!-- Menu -->
<script src="{{asset('js/menu.js')}}"></script>
<!-- Home -->
<script src="{{asset('js/home.js')}}"></script>
</body>
</html>
