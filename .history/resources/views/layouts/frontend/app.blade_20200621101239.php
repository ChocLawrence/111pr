<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta property="og:title" content="ASwiftConnect" />
    <meta property="og:image" content="{{ asset('assets/frontend/css/landing/images/hero-bg.jpg') }}" />
    <meta property="og:type" content="website" />

    <!--SEO-->
    <meta name="description"
        content="The full-service agency specializes in public relations, brand development and event production. Our renowned clients range from: music, sports, TV, technology, entrepreneurial start-up companies, arts & culture and fitness/wellness.">

    <!---Meta keywords--->

    <meta name="keywords" content="ASwiftConnect,freelance jobs,tech jobs" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')|{{ config('app.name', 'Laravel') }}</title>



    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Stylesheets -->

    @stack('css')

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">



    @stack('scripts')

</head>

<body>


    @include('layouts.frontend.partial.header')

    @yield('content')

    @include('layouts.frontend.partial.footer')




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#f0b412" /></svg></div>


    <!-- SCIPTS -->

    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('assets/js/aos.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.timepicker.min.js')}}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8sWrswpKdR58ZbK9u4igT3cdU4Nun_kw&sensor=false">
    </script>
    <script src="{{ asset('assets/js/google-map.js')}}"></script>
    <script src="{{ asset('assets/js/main.js')}}"></script>

    {{-- @include('cookieConsent::index') --}}

</body>

</html>
