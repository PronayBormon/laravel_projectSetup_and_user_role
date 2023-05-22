<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
    
</head>
<body>
    @include('layouts.inc.admin_nav')
    <div id="layoutSidenav">
        @include('layouts.inc.admin_sidebar')
        <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                @include('layouts.inc.footer')
        </div>

    </div>



<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
<script src="{ asset('assets/js/scripts.js')}}"></script>
</body>
</html>



