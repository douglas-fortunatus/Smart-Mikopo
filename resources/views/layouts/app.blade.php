<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LOGIN - SMART MIKOPO') }}</title>

    <link href="{{ asset('css/font-awesome.min.css" rel="stylesheet') }}" type="text/css" media="all">

    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>


  
     
@yield('content')
       


</body>
</html>
