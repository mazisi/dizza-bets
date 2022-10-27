
<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dizza - LiveScores</title>
    @livewireStyles
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/plugin/nice-select.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/arafat-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        input, textarea {
            padding: 0px 20px;
            width: 100%;
            font-family: var(--body-font);
            height: 35px;
            background: #ffffff;
            border: 1px solid #120f54;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
@include('layouts.header')

  

    <!-- How it Works start -->
    @yield('dash-content')
    <!-- How it Works end -->

    @livewireScripts
    <!--==================================================================-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/slick.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.downCount.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/counter.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/wow.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/plugin/plugin.js') }}"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>