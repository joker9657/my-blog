<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="{{ asset('css/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('uploads/favicon.ico') }}" type="image/x-icon">
    <script src="{{ asset('js/app.js') }}"></script>
    <title>@yield('title', 'Joker 的博客')</title>
</head>
<body>
<div class="box">
    @include('layout.header')
    @yield('main')
    @include('layout.footer')
</div>
</body>
</html>
