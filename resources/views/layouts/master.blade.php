<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home-2 || Pander Furniture Ecommerce Bootstrap 4 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Animate css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- 7-stroke fonts css -->
    <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.min.css') }}">
    <!-- Ionicons fonts css -->
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <!-- Nice select css -->
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <!-- Jquery fancybox css -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <!-- Jquery ui price slider css -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <!-- Meanmenu css -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- Owl carousel css -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive csss -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @yield('css')
    <!-- Modernizer js -->
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
</head>

<body>
    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
     @include('include.header')
     @yield('content')
     @include('include.footer')
    </div>


     <!-- jquery 3.3.1 -->
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-migrate-3.3.1.min.js') }}"></script>
    <!-- Countdown js -->
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <!-- Mobile menu js -->
    <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
    <!-- ScrollUp js -->
    <script src="{{ asset('js/jquery.scrollUp.js') }}"></script>
    <!-- Fancybox js -->
    <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
    <!-- Jquery nice select js -->
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <!-- Jquery ui price slider js -->
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- Bootstrap popper js -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Plugin js -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- Main activaion js -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('js')
</body>