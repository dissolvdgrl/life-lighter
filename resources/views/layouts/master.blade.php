<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="Life and wellness coaching in Pretoria, South Africa">
    <title>@yield('page-title') - {{ config('app.name') }} </title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav id="nav" class="container flex justify-between bg-gradient-to-b from-cyan-500 to-transparent relative">
            <div class="p-8 flex justify-between w-full text-darkBlue">
                <img src="{{ asset('images/Logo.png') }}" alt="Life Lighter">
                <div id="navToggle" class="cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </div>
            </div>
            <div class="hidden flex-col items-center absolute w-full bg-white">
                <a href="#">Home</a>
                <a href="#">About</a>
                <a href="#" target="_blank" class="button button-solid">Book Now</a>
            </div>
        </nav>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>