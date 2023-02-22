<!DOCTYPE html>
<html class="no-js" lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow" />

    <title>Inusiart</title>
    <meta name="description" content="Inusiart">

    @yield('head')

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ url('storage/css/vendor/bootstrap.min.css') }}">

    {{-- Icons Font --}}
    <link rel="stylesheet" href="{{ url('storage/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/vendor/linearicons.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/vendor/themify-icons.css') }}">

    {{-- Plugins --}}
    <link rel="stylesheet" href="{{ url('storage/css/plugins/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/animate.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/jquery.mb.ytplayer.min.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/jarallax.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('storage/css/plugins/easyzoom.css') }}">

    {{-- Main --}}
    <link rel="stylesheet" href="{{ url('storage/css/style.css') }}">

    <link rel="canonical" href="{{ URL::current() }}" />

</head>

<body>

    @yield('content')

    {{-- Modernizr Customizado - JQuery - Bootstrap --}}
    <script src="{{ url('storage/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ url('storage/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('storage/js/vendor/popper.js') }}"></script>
    <script src="{{ url('storage/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ url('storage/js/vendor/bootstrap-notify.min.js') }}"></script>

    {{-- Plugins --}}
    <script src="{{ url('storage/js/plugins/owl-carousel.js') }}"></script>
    <script src="{{ url('storage/js/plugins/slick.js') }}"></script>
    <script src="{{ url('storage/js/plugins/jquery.mb.ytplayer.min.js') }}"></script>
    <script src="{{ url('storage/js/plugins/magnific-popup.js') }}"></script>
    <script src="{{ url('storage/js/plugins/wow.js') }}"></script>
    <script src="{{ url('storage/js/plugins/instafeed.js') }}"></script>
    <script src="{{ url('storage/js/plugins/countdown.js') }}"></script>
    <script src="{{ url('storage/js/plugins/jarallax.min.js') }}"></script>
    <script src="{{ url('storage/js/plugins/images-loaded.js') }}"></script>
    <script src="{{ url('storage/js/plugins/isotope.js') }}"></script>
    <script src="{{ url('storage/js/plugins/tilt.js') }}"></script>
    <script src="{{ url('storage/js/plugins/jquery-ui.js') }}"></script>
    <script src="{{ url('storage/js/plugins/jquery-ui-touch-punch.js') }}"></script>
    <script src="{{ url('storage/js/plugins/easyzoom.js') }}"></script>
    <script src="{{ url('storage/js/plugins/resizesensor.js') }}"></script>
    <script src="{{ url('storage/js/plugins/sticky-sidebar.js') }}"></script>
    <script src="{{ url('storage/js/plugins/scrollup.js') }}"></script>
    <script src="{{ url('storage/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ url('storage/js/plugins/ajax-mail.js') }}"></script>
    <script src="{{ url('storage/js/plugins/skrollr.js') }}"></script>

    {{-- Main --}}
    <script src="{{ url('storage/js/main.js') }}"></script>


    @yield('footer')

</body>

</html>
