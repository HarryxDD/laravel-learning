<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <h1 class="text-3xl font-bold underline text-sky-700">
            Hello world!
        </h1>
    </body>
</html>
