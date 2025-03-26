<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Multi Award Winning United Kingdom Designer">
    <meta name="author" content="Faruq Hossen">
    <meta name="generator" content="MonodeepSamanta 2.0">
    <link rel="icon" type="image/x-icon" href="">

    <title> @yield('title', '')</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    @else
        <link rel="stylesheet" href="{{ asset('custom.css') }}">

    @endif

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    @stack('styles')
</head>

<body class="bg-white ">


    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    @stack('scripts')

</body>

</html>
