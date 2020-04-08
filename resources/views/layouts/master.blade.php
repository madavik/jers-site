<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
        <title>Jer - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('partials.header')
        @yield('content')
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
