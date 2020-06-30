<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield ('page-name')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;600&display=swap" rel="stylesheet">
</head>
<body>
    @include ('partials.header')
    @yield('content')
    @include ('partials.footer')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>