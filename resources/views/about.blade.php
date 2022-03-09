@extends('layouts.master')

@section('page-title', 'About')

@section('header')
    <x-header
        preTitle=""
        title="About"
        titleCursive="our company"
        action="Book Now"
        actionUrl="#"
        newtab="_blank"
        image="images/about-header.jpg">      
    </x-header>
@endsection

@section('content')
    <section class="relative py-24 w-5/6 lg:w-4/6 mx-auto grid grid-cols-1 gap-8 lg:mt-16 md:grid-cols-3">
        <div class="md:col-span-2">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl mb-8">The Life Lighter mission is to help people, especially women, to be healthier</p>
            <p class="font-sans text-darkBlue mb-8">– not just in the physical, but also in soul (thoughts, emotions and will), and in spirit; and to grow and improve in their relationships with themselves, food and others.</p>
            <p class="font-sans text-darkBlue">It brings great to joy to see people transform from being overwhelmed and burdened to experience a lighter nourished life with optimal wellbeing.</p>
        </div>
        <div>
            <img src="{{ asset('/images/woman-on-beach.jpg') }}" alt="" class="mx-auto shadow-2xl lg:w-64">
        </div>
    </section>

    <section class="relative mb-36 w-5/6 lg:w-4/6 mx-auto">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">Wellbeing, and a lighter life,</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">is a daily choice and a lifelong journey.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 top-12 opacity-20 m-auto">
    </section>

    <section class="relative w-5/6 lg:w-4/6 mx-auto grid grid-cols-1 md:grid-cols-2 md:gap-16">
        <div class="w-full h-64 bg-slate-200 shadow-2xl mb-16 md:mb-0">
            <img src="" alt="foto" class="">
        </div>
        <div>
            <p class="text-darkBlue uppercase font-sans font-bold text-4xl text-center md:text-left">Careen's</p>
            <p class="text-turquoise text-center font-cursive leading-3 text-4xl uppercase md:text-left mb-16">story</p>
            <p class="text-darkBlue uppercase font-sans font-bold text-2xl mb-8 text-center md:text-left">Hi. I am Careen Visagie.</p>
            <p class="font-sans text-darkBlue mb-8 text-center md:text-left">I am here to help you regain and improve your health and wellbeing by addressing the root causes of your challenges.</p>
            <p class="font-sans text-darkBlue mb-8 text-center md:text-left">I help you on your journey to live a lighter, nourished life – able to fulfill your purpose, passions and potential.</p>
        </div>
    </section>

    <section class="relative w-5/6 lg:w-4/6 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-16">
        <div class="flip-card card-1 lg:col-span-3">
            <div class="card-front">
                <p class="font-cursive uppercase text-center text-white">Read more about</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white">My qualification</p>
            </div>
            <div class="card-back">
                <p class="text-white">I am a registered dietitian RD (SA), a coach and a mentor.</p>  
                <p class="text-white">I received a Bachelor of Science Degree in Human Nutrition and Dietetics from the University of Stellenbosch.  Further nutrition studies include:</p>
                <p class="text-white">-  2-year course in Functional Medicine</p>
                <p class="text-white">- Master’s module in Nutrigenomics and Diabetes</p>
                <p class="text-white">- Foundational Course in “Treating the Emotional Eater”</p>
                <p class="text-white">- 3X4 Foundations Course in Nutrigenomics</p>
                <p class="text-white">I am also a certified NBI Practitioner. I completed my coach training through Profectus, and previously achieved an ACC credential from the International Coach Federation. </p>
                <p class="text-white">I hold a Diploma in Education, Mentorship and C.A.T. from Ginõskõ: SA Academy for Education and Mentorship in Humanness/ Personhood</p>
            </div>
        </div>
        <div class="flip-card card-2 lg:col-span-2">
            <div class="card-front">
                <p class="font-cursive uppercase text-center text-white">Read more about</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white">My experience</p>
            </div>
            <div class="card-back">
                <p class="text-white">I have many years of experience as clinical dietitian working in hospitals and communities (mostly in the UK), and in private practice.  My special interest in nutrition are focused towards weight management, nutrigenomics, digestive health and auto-immune disorders.</p> 
                <p class="text-white">As coach my specialties include life coaching and health coaching.</p>
                <p class="text-white">As mentor, my experience and focus is towards Christian women of all ages, who have a desire to grow in their Biblical principles.</p>
            </div>
        </div>
        <div class="flip-card card-3 lg:col-span-1">
            <div class="card-front">
                <p class="font-cursive uppercase text-center text-white">Contributing</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white">author</p>
            </div>
            <div class="card-back">
                <p class="text-white">Coming soon!</p> 
            </div>
        </div>
        <div class="flip-card card-4 lg:col-span-3">
            <div class="card-front">
                <p class="font-cursive uppercase text-center text-white">Other</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white">Interests</p>
            </div>
            <div class="card-back">
                <p class="text-white">Coming soon!</p> 
            </div>
        </div>
        <div></div>
    </section>

    <section class="relative py-16 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center">Want more information on how I can help you?</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">Book a “Hello Session” now</p>
        <a href="javascript:void()" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Get started</a>
    </section>
@endsection