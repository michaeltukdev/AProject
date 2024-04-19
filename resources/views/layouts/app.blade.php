<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-background">
    @unless (Request::is('login', 'register'))
        @livewire('navigation')
    @endunless

    @auth
        @livewire('CreateProject')
    @endauth

    @yield('content')
</body>

</html>
