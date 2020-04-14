<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('uploads/favicon.ico') }}" type="image/x-icon">
    <title>Joker的博客</title>
</head>
<body>
<div class="box">
    @include('layout.header')
    @yield('main')
    @include('layout.footer')
</div>
</body>
</html>
