<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Vincent Dubois e2295393" />
    <title>{{ config('app.name') }} : @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>

    @yield('content')
    
</body>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</html>