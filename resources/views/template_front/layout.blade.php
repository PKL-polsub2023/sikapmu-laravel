<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta property="og:site_name" content="silapem.com"/>
	<meta property="og:title" content="SILAPEM"/>
	<meta property="og:description" content="SILAPEM">
	<meta property="og:image" content="https://silapem.com/front/images/logo.png">
	<meta property="og:url" content="https://silapem.com/home">
    <meta property="og:type" content="website" />

    <link rel="stylesheet" href="{{ asset('') }}front/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/fontawsome.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/fonts/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/meanmenu.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/nice-select.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/odometer.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/stylecostum.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/aos.css">
    <script src="{{ asset('') }}front/js/jquery.min.js"></script>
    <!---Highchart-->
	<script src="{{ asset('') }}plugin/hc/code/highcharts.js"></script>
	<script src="{{ asset('') }}plugin/hc/code/modules/series-label.js"></script>
	<script src="{{ asset('') }}plugin/hc/code/modules/exporting.js"></script>
	<script src="{{ asset('') }}plugin/hc/code/modules/offline-exporting.js"></script>
	<script src="{{ asset('') }}plugin/hc/code/modules/export-data.js"></script>
	<title>@yield('title','SILAPEM')</title>
    <!--- Favicon --->
    <link rel="icon" href="{{ asset('') }}front/images/favicon.png" type="image/x-icon" />
</head>

<body>


    @include('template_front.navheader')
    <div id="areacontent">
        @yield('content')
    </div>
    @include('template_front.footer')

    
    <script src="{{ asset('') }}front/js/jquery-ui.min.js"></script>
    <script src="{{ asset('') }}front/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('') }}front/js/meanmenu.js"></script>
    <script src="{{ asset('') }}front/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}front/js/magnific-popup.min.js"></script>
    <script src="{{ asset('') }}front/js/TweenMax.js"></script>
    <script src="{{ asset('') }}front/js/nice-select.min.js"></script>
    <script src="{{ asset('') }}front/js/form-validator.min.js"></script>
    <script src="{{ asset('') }}front/js/contact-form-script.js"></script>
    <script src="{{ asset('') }}front/js/ajaxchimp.min.js"></script>
    <script src="{{ asset('') }}front/js/owl.carousel2.thumbs.min.js"></script>
    <script src="{{ asset('') }}front/js/appear.min.js"></script>
    <script src="{{ asset('') }}front/js/odometer.min.js"></script>
    <script src="{{ asset('') }}front/js/aos.js"></script>
    <script src="{{ asset('') }}front/js/custom.js"></script>
    @stack('costum-script')
</body>

</html>
