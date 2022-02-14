<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="description" content="Life and wellness coaching in Pretoria, South Africa">
    <title>@yield('page-title') - {{ config('app.name') }} </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="relative">
        <nav id="nav" class="w-full mx-auto flex justify-between bg-gradient-to-b from-white via-white to-transparent fixed top-0 z-30">
            <div class="container max-w-screen-xl mx-auto">
                <div class="p-8 flex justify-between w-full text-darkBlue">
                    <img src="{{ asset('images/Logo.png') }}" alt="Life Lighter" class="w-24 self-center">
                    <navigation></navigation>                    
                </div>
            </div>
        </nav>
        
        <header class="relative pt-36">
            <div class="container lg:max-w-5xl mx-auto p-8 tracking-wide">
                <p class="font-sans text-gray-400">Be healthier in body, soul and spirit.</p>
                <h1 class="font-bold text-5xl text-darkBlue tracking-wide">Live a lighter, </h1>
                <h2 class="text-6xl italic leading-3 text-turquoise font-cursive">nourished life</h2>
                <a href="#" class="button border-pomegranate text-pomegranate mt-8 hover:bg-pomegranate" target="_blank">Book now</a>
            </div>
            <header-clip-path></header-clip-path>
            <img src="{{ asset('images/home-header.jpg') }}" alt="" class="header-img w-full">
        </header>
    </div>

    @yield('content')

    <footer class="vetplant-bg p-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 container mx-auto w-5/6">
            <div>
                <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm text-center md:text-left">Stay Connected</p>
                <p class="flex justify-center text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 text-center md:text-left">
                    <img src="{{ asset('/images/ig_logo.svg') }}" alt="" class="mr-4"> 
                    <a href="javascript:void()" >instagram.com/my-profile</a>
                </p>
                <p class="flex justify-center text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 mt-4 text-center md:text-left">
                    <img src="{{ asset('/images/fb_logo.svg') }}" alt="" class="mr-4"> 
                    <a href="javascript:void()" >facebook.com/my-profile</a>
                </p>
            </div> <!-- col 1 -->
            <div class="flex flex-col items-center md:items-start">
                <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm text-center md:text-left">Contact</p>
                <p class="flex text-sm text-darkBlue text-center md:text-left">076 274 6890</p>
                <p class="flex text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 mt-4 text-center md:text-left"><a href="mailto:info@lifelighter.co.za">info@lifelighter.co.za</a></p>
                <p class="flex text-sm text-darkBlue mt-4 text-center">
                    581 Koichab Street<br>
                    Erasmuskloof Ext. 3<br>
                    Pretoria
                </p>
            </div> <!-- col 2 -->
            <div class="flex flex-col items-center md:items-start">
                <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm text-center md:text-left">Office Hours</p>
                <p class="flex text-sm text-darkBlue text-center md:text-left">Mondays &#8212</p>
                <p class="flex text-sm text-darkBlue text-center md:text-left">Tuesdays &#8212</p>
                <p class="flex text-sm text-darkBlue text-center md:text-left">Wednesdays &#8212</p>
                <p class="flex text-sm text-darkBlue text-center md:text-left">Thursdays &#8212</p>
                <p class="flex text-sm text-darkBlue text-center md:text-left">Fridays &#8212</p>
            </div> <!-- col 3 -->
            <div class="bg-gray-100 p-8 md:col-span-3">
                <p class="text-gray-500 tracking-widest text-center">“…but I have come to give you everything in abundance, more than you expect – </p>
                <p class="text-center text-turquoise font-cursive text-3xl">life in its fullness until you overflow!” </p>
                <p class="text-xs font-bold text-darkBlue tracking-ultrawide uppercase text-center mt-4">John 10:10 TPT</p>
            </div> <!-- col 4 -->
        </div>
        <p class="text-center text-xs text-gray-400 tracking-widest mt-8">© {{ date('Y')}} Life Lighter  |  <a href="https://chilldsgn.com/" target="_blank">Made by CHD</a></p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>