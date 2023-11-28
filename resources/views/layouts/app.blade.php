<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Blog | {{ config('app.name', 'Entol Rizky') }}</title>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo/logo.png') }}">

<!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
@if($_SERVER['REMOTE_ADDR'] === "127.0.0.1")
        @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
<!-- CSS -->
        <link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}">
<!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('build/assets/js/main2.js') }}">
@endif
@if(isset($additional))
        {{ $additional }}
@endif
    </head>
    <body class="font-sans antialiased">


        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
@if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
@endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
@if(isset($js))
        {{ $js }}
@endif
    </body>
</html>
