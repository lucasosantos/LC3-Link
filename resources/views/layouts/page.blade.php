<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>@yield('titulo')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.meta')
</head>
<body>
    <div id="app">
        @include('objetos.navbar')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>