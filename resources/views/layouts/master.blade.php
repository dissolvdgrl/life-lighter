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
        <nav id="nav" class="container mx-auto flex justify-between bg-gradient-to-b from-white to-transparent sticky top-0" style="z-index:10;">
            <div class="p-8 flex justify-between w-full text-darkBlue">
                <img src="{{ asset('images/Logo.png') }}" alt="Life Lighter" class="w-24">
                <menu-toggle @toggle="toggleMenu"></menu-toggle>
            </div>
            <Transition name="slide-fade">
                <div v-if="showMenu" class="flex flex-col items-center absolute h-screen w-full bg-white justify-center transition-all duration-150">
                    <a href="#" class="nav-link">Home</a>
                    <a href="#" class="nav-link">About</a>
                    <a href="#" class="nav-link">Services</a>
                    <a href="#" class="nav-link">Blog</a>
                    <a href="#" target="_blank" class="button button-solid bg-pomegranate hover:text-pomegranate focus:text-pomegranate">Book Now</a>
                </div>
            </Transition>
        </nav>
        
        <header class="relative">
            <div class="container mx-auto p-8 tracking-wide">
                <p class="font-sans text-gray-400">Be healthier in body, soul and spirit.</p>
                <h1 class="font-bold text-5xl text-darkBlue tracking-wide">Live a lighter, </h1>
                <h2 class="text-5xl text-turquoise">nourished life</h2>
                <a href="#" class="button border-pomegranate text-pomegranate mt-8 hover:bg-pomegranate" target="_blank">Book now</a>
            </div>
            <header-clip-path></header-clip-path>
            <img src="{{ asset('images/home-header.jpg') }}" alt="" class="header-img w-full">
        </header>
    </div>

    @yield('content')

    <footer class="vetplant-bg p-16">
        <div class="grid grid-cols-1 gap-8 container mx-auto w-5/6">
            <div>
                <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm">Stay Connected</p>
                <p class="flex text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70">
                    <img src="{{ asset('/images/ig_logo.svg') }}" alt="" class="mr-4"> 
                    <a href="javascript:void()" >instagram.com/my-profile</a>
                </p>
                <p class="flex text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 mt-4">
                    <img src="{{ asset('/images/fb_logo.svg') }}" alt="" class="mr-4"> 
                    <a href="javascript:void()" >facebook.com/my-profile</a>
                </p>
            </div> <!-- col 1 -->
            <div>
                <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm">Contact</p>
                <p class="flex text-sm text-darkBlue">076 274 6890</p>
                <p class="flex text-sm text-darkBlue transition-opacity duration-150 hover:opacity-70 mt-4"><a href="mailto:info@lifelighter.co.za">info@lifelighter.co.za</a></p>
                <p class="flex text-sm text-darkBlue mt-4">
                    581 Koichab Street<br>
                    Erasmuskloof Ext. 3<br>
                    Pretoria
                </p>
            </div> <!-- col 2 -->
            <div>
                <p class="uppercase text-darkBlue font-bold tracking-ultrawide mb-8 text-sm">Office Hours</p>
                <p class="flex text-sm text-darkBlue">Mondays &#8212</p>
                <p class="flex text-sm text-darkBlue">Tuesdays &#8212</p>
                <p class="flex text-sm text-darkBlue">Wednesdays &#8212</p>
                <p class="flex text-sm text-darkBlue">Thursdays &#8212</p>
                <p class="flex text-sm text-darkBlue">Fridays &#8212</p>
            </div> <!-- col 3 -->
            <div class="bg-gray-100 p-8">
                <p class="text-gray-500 tracking-widest text-center">“…but I have come to give you everything in abundance, more than you expect – </p>
                <p class="text-center text-turquoise ">life in its fullness until you overflow!” </p>
                <p class="text-xs font-bold text-darkBlue tracking-ultrawide uppercase text-center mt-4">John 10:10 TPT</p>
            </div> <!-- col 4 -->
        </div>
        <p class="text-center text-xs text-gray-400 tracking-widest mt-8">© {{ date('Y')}} Life Lighter  |  <a href="https://chilldsgn.com/" target="_blank">Made by CHD</a></p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>