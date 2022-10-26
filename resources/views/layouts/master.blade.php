<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <meta name=apple-mobile-web-app-capable content=yes>
    <meta name=apple-mobile-web-app-status-bar-style content=black>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}">
    <link href="{{ asset('css/app.css') }}">
    <title>Blog</title>
</head>
<body class="wrapper d-flex flex-column min-h-screen">
@include('layouts.header')
<div class="flex-1">
    <!-- content -->
    @yield('content')
</div>

@yield('first_scripts')
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
@include('layouts.footer')
</body>
@yield('after_scripts')

</html>
