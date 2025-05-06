<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 12</title>
        @vite(['resources/css/app.scss'])
    </head>
    <body>
        <h1>Estudo Laravel 12</h1>
        @vite(['resources/js/app.js'])
    </body>
</html>
