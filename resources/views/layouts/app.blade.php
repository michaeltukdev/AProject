<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/css/app.css')
</head>

<body class="pb-12 overflow-x-hidden antialiased bg-background @if (Request::is('login', 'register')) overflow-y-hidden @endif">
    <img class="absolute object-cover w-full -z-50 h-full max-h-[500px]" alt="Background image" src="{{ asset('image.png') }}">

    @unless (Request::is('login', 'register'))
        @livewire('navigation')
    @endunless

    @auth
        @livewire('CreateProject')

        @livewire('EditProject')
    @endauth

    @livewire('ProjectModal')

    @yield('content')
</body>

</html>
