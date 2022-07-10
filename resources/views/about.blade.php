@extends('layouts.master')

@section('page-title', 'About')

@section('header')
    <x-header
        preTitle=""
        title="About"
        titleCursive="our practice"
        action="Book Now"
        actionUrl="https://booking.setmore.com/scheduleappointment/65f8b765-3315-4ad8-b703-9d0987a6ce79/services/s25c21496694829911?source=easyshare"
        newtab="_blank"
        image="images/about-header.jpg">
    </x-header>
@endsection

@section('content')
    <section class="relative pb-24 w-5/6 lg:w-4/6 mx-auto grid grid-cols-1 gap-8 lg:mt-16 md:grid-cols-3">
        <div class="md:col-span-2">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl mb-8">The Life Lighter mission is to help people, especially women, to be healthier</p>
            <p class="font-sans text-darkBlue mb-8">– not just in the physical, but also in soul (thoughts, emotions and will), and in spirit; and to grow and improve in their relationships with themselves, food and others.</p>
            <p class="font-sans text-darkBlue">It brings great to joy to see people transform from being overwhelmed and burdened to experience a lighter nourished life with optimal wellbeing.</p>
        </div>
        <div>
            <img src="{{ asset('/images/about-img.jpg') }}" alt="Woman waving a red scarf" class="mx-auto shadow-2xl lg:w-64">
        </div>
    </section>

    <section class="relative mb-36 w-5/6 lg:w-4/6 mx-auto">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">Wellbeing, and a lighter life,</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">is a daily choice and a lifelong journey.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 top-12 opacity-20 m-auto">
    </section>

    <section class="relative w-5/6 lg:w-4/6 mx-auto grid grid-cols-1 md:grid-cols-2 md:gap-16 mb-16">
        <div class="w-full bg-slate-200 shadow-2xl mb-16 md:mb-0">
            <img src="{{ asset('/images/careen.jpg') }}" alt="foto" class="">
        </div>
        <div>
            <p class="text-darkBlue uppercase font-sans font-bold text-4xl text-center md:text-left">Careen's</p>
            <p class="text-turquoise text-center font-cursive leading-3 font-bold text-6xl md:text-left mb-16">story</p>
            <p class="text-darkBlue uppercase font-sans font-bold text-2xl mb-8 text-center md:text-left">Hi. I am Careen Visagie.</p>
            <p class="font-sans text-darkBlue mb-8 text-center md:text-left">I have so much empathy and understanding with people who struggle with their health and are unhappy with their body weight or uncomfortable in themselves.  It can be overwhelming, but these challenges do not have to consume your days.</p>
            <p class="font-sans text-darkBlue mb-8 text-center md:text-left">There is hope! </p>
            <a href="/blog/about-careen-visagie" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Read more</a>
        </div>
    </section>

    <section class="relative w-5/6 lg:w-4/6 mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-16">
        <div class="flip-card card-1 lg:col-span-3">
            <div class="card-front">
                <p class="font-cursive text-center text-white text-4xl">Read more about</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white text-2xl">My qualification</p>
            </div>
            <div class="card-back">
                <p class="text-white">I am a registered dietitian RD (SA), a coach and a mentor.</p>
                <p class="text-white">I received a Bachelor of Science Degree in Human Nutrition and Dietetics from the University of Stellenbosch.  Further nutrition studies include: Functional medicine training; Master’s modules in Nutrigenomics and Diabetes; Foundational Courses in “Disordered Eating“ and “Treating the Emotional Eater”;  3X4 Foundations Course in Nutrigenomics; EATFIT FODMAPS trained practitioner</p>

                <p class="text-white">I completed my coach training through Profectus, and previously achieved an ACC credential from the International Coach Federation. I am a certified NBI (Whole brain thinking) Practitioner.</p>
                <p class="text-white">I hold a Diploma in Education, Mentorship and C.A.T. from Ginõskõ: SA Academy for Education and Mentorship in Humanness/ Personhood</p>
            </div>
        </div>
        <div class="flip-card card-2 lg:col-span-2">
            <div class="card-front">
                <p class="font-cursive text-center text-white text-4xl">Read more about</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white text-2xl">My experience</p>
            </div>
            <div class="card-back">
                <p class="text-white">I have many years of experience as clinical dietitian working in hospitals and communities (mostly in the UK), and in private practice.</p>
                <p class="text-white">My special interest in nutrition is focused on nutrigenomics, digestive health, weight “management” from a weight neutral, non-diet perspective, and auto-immune disorders.</p>
                <p class="text-white">As coach my specialties include life coaching and health/ wellness coaching.</p>
                <p class="text-white">As mentor my focus are towards Christian women of all ages, who have a desire to grow in their ability to apply Biblical principles in their relationships and to live more Christ-like lives.</p>
            </div>
        </div>
        <div class="flip-card card-3 lg:col-span-1">
            <div class="card-front">
                <p class="font-cursive text-center text-white text-4xl">Read more about</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white text-2xl">My Philosophy</p>
            </div>
            <div class="card-back">
                <p class="text-white">
                    <a href="/blog/my-philosophy" class="font-bold cursor-pointer">Read about my philosophy <strong>here</strong></a></p>
            </div>
        </div>
        <div class="flip-card card-4 lg:col-span-3">
            <div class="card-front">
                <p class="font-cursive text-center text-white text-4xl">Other</p>
                <p class="font-sans uppercase text-center tracking-ultrawide text-white text-2xl">Interests</p>
            </div>
            <div class="card-back">
                <p class="text-white">I love running!</p>
                <p class="text-white">I enjoy gardening and being creative – in various forms – painting, decoupage, colouring-in, and more.</p>
                <p class="text-white">I have a deep appreciation for fermented food and drinks, and I am an experienced kombucha brewer.</p>
            </div>
        </div>
        <div></div>
    </section>

    <section class="relative py-16 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center mb-2">Want more information on how I can help you?</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">Book a “Hello Session” now</p>
        <a href="https://booking.setmore.com/scheduleappointment/65f8b765-3315-4ad8-b703-9d0987a6ce79/services/s25c21496694829911?source=easyshare" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate" target="_blank">Get started</a>
    </section>
@endsection

@section('footer-verse')
    <x-footer-verse
        text-regular="So above all, guard the affections of your heart, for they affect all that you are.  Pay attention to the welfare of your innermost being,"
        text-cursive="for from there flows the wellspring of life.”"
        verse="Prov. 4:23 TPT"
    ></x-footer-verse>
@endsection


