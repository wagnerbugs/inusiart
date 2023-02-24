<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel Administrativo</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ url('/storage/admin-lte/dist/css/adminlte.min.css?v=3.2.0') }}">

    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}">

    @yield('head')

</head>

<body class="hold-transition sidebar-mini {{ Auth::guard('admin')->user()->style }}">
    <div class="wrapper">

        {{-- TOP NAVBAR --}}

        @include('admin.commom.header')

        {{-- END TOP NAVBAR --}

        {{-- SIDEBAR --}}

        @include('admin.commom.aside')

        {{-- END SIDEBAR --}}

        {{-- CONTENT --}}

        <div class="content-wrapper">

            @yield('content')

        </div>

        {{-- END CONTENT --}}

        {{-- SIDEBAR CONTROL --}}

        @include('admin.commom.sidebar')

        {{-- END SIDEBAR CONTROL --}}

        {{-- FOOTER --}}

        @include('admin.commom.footer')

        {{-- END FOOTER --}}

    </div>

    {{-- SCRIPTS --}}



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js"></script>

    @yield('footer')
</body>

</html>
