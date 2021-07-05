<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{ asset('assets/front-end/img/logo.jpg')}}" type="image/jpg">
	<title>Sams92</title>

	<link rel="stylesheet" href="{{ asset('assets/front-end/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/vendors/owl-carousel/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/toastr.min.css') }}">
   <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 

</head>
<body>
    <style>
        .main-title{
            margin-bottom: 29px;
        }
        .main-title h1 {
            text-transform: inherit;
        }
    </style>
    @stack('css')

@include('layout.front-end.partials.header')
<!-- Banner Area -->
@yield('content')

@include('layout.front-end.partials.footer');

<script src="{{ asset('assets/front-end/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/popper.js') }}"></script>
<script src="{{ asset('assets/front-end/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/front-end/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/front-end/js/theme.js') }}"></script>
<script src="{{ asset('assets/back-end/assets/js/pages/be_pages_dashboard.min.js') }}"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
@stack('script')
</html>