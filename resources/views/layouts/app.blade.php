<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-background">
    <img class="absolute object-cover w-full -z-50 h-full max-h-[500px]" alt="Background image" src="{{ asset('image.png') }}">

    @unless (Request::is('login', 'register'))
        @livewire('navigation')
    @endunless

    @auth
        @livewire('CreateProject')

        @livewire('ProjectModal')
    @endauth

    @yield('content')
</body>

</html>
