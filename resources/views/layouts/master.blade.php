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
    <div id="app" class="relative">
        <nav id="nav" class="w-full mx-auto flex justify-between bg-white bg-opacity-90 fixed top-0 z-30">
            <div class="container max-w-screen-xl mx-auto">
                <div class="p-4 flex justify-between w-full text-darkBlue relative">
                    <img src="{{ asset('images/Logo.png') }}" alt="Life Lighter" class="w-24 self-center">
                    <navigation></navigation>
                </div>
            </div>
        </nav>
        @yield('header')

        @yield('content')

        <footer class="vetplant-bg p-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 container mx-auto w-5/6">
                <div>
                    <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm text-center md:text-left">Stay Connected</p>
                    <p class="flex justify-center md:justify-start text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 text-center md:text-left">
                        <img src="{{ asset('/images/ig_logo.svg') }}" alt="" class="mr-4">
                        <a href="https://www.instagram.com/life.lighter/" target="_blank">instagram.com/life.lighter</a>
                    </p>
                    <p class="flex justify-center md:justify-start text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 mt-4 text-center md:text-left">
                        <img src="{{ asset('/images/fb_logo.svg') }}" alt="" class="mr-4">
                        <a href="https://www.facebook.com/lifelighterliving/" target="_blank">facebook.com/lifelighterliving</a>
                    </p>
                </div> <!-- col 1 -->
                <div class="flex flex-col items-center md:items-start">
                    <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm text-center md:text-left">Contact</p>
                    <p class="flex text-sm text-darkBlue text-center md:text-left">076 274 6890</p>
                    <p class="flex text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 mt-4 text-center md:text-left"><email/></p>
                    <p class="flex text-sm text-darkBlue mt-4 text-center md:text-left">
                        581 Koichab Street<br>
                        Erasmuskloof Ext. 3<br>
                        Pretoria
                    </p>
                </div> <!-- col 2 -->
                <div class="flex flex-col items-center md:items-start">
                    <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm text-center md:text-left">Office Hours</p>
                    <p class="flex text-sm text-darkBlue text-center md:text-left">Mondays &#8212 10h00 – 18h00</p>
                    <p class="flex text-sm text-darkBlue text-center md:text-left">Tuesdays &#8212 08h30 – 14h00</p>
                    <p class="flex text-sm text-darkBlue text-center md:text-left">Wednesdays &#8212 09h30 – 17h00</p>
                    <p class="flex text-sm text-darkBlue text-center md:text-left">Thursdays &#8212 09h00 – 18h00</p>
                    <p class="flex text-sm text-darkBlue text-center md:text-left">Fridays &#8212 09h00 – 15h00</p>
                </div> <!-- col 3 -->
                @yield('footer-verse')
            </div>
            <p class="text-center text-xs text-gray-400 tracking-widest mt-8">© {{ date('Y')}} Life Lighter  |  <a href="https://chilldsgn.com/" target="_blank">Made by CHD</a></p>
        </footer>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
