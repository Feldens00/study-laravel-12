<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Estudo Laravel 12')</title>
    @vite('resources/css/app.css')
</head>
<body>
    @yield('content')
    @vite('resources/js/app.js')
</body>
</html>
