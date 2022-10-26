<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
    <meta name=apple-mobile-web-app-capable content=yes>
    <meta name=apple-mobile-web-app-status-bar-style content=black>
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <script src="{{asset('assets-4.0/js/plugins/alpine.min.js')}}" defer></script>
    <link rel="icon" type="image/x-icon" href="{{asset('/images/favicon.ico')}}">
    <title>Blog</title>
</head>
@include('layouts.header')
<body class="d-flex flex-column min-h-screen">
<div class="flex-1">
    <!-- content -->
    @yield('content')
</div>

@yield('first_scripts')
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
@include('layouts.footer')
@yield('after_scripts')

</html>
