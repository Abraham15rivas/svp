<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SVP') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/iconos.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">



</head>
<body>
    @if (Request::path() != 'login')
        @include('partials.navigation')
    @endif
        <main>
            @yield('title')
            @yield('content')
        </main>
        @include('partials.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
