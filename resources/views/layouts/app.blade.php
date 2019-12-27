
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('assetshome/img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Karma Shop</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('assetshome/css/linearicons.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{ asset('assetshome/css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{ asset('assetshome/css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{ asset('assetshome/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('assetshome/css/main.css')}}">



</head>

<body>
	@include('components.header')
	@yield('content')
	@include('components.footer')

	<!-- End footer Area -->

	<script src="{{ asset('assetshome/js/vendor/jquery224.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('assetshome/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{ asset('assetshome/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{ asset('assetshome/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('assetshome/js/jquery.sticky.js')}}"></script>
	<script src="{{ asset('assetshome/js/nouislider.min.js')}}"></script>
	<script src="{{ asset('assetshome/js/countdown.js')}}"></script>
	<script src="{{ asset('assetshome/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('assetshome/js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('assetshome/js/gmaps.min.js')}}"></script> --}}
    <script src="{{ asset('assetshome/js/main.js')}}"></script>
    @yield('script')
</body>

</html>

