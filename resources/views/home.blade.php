@extends('layouts.master')

@section('page-title', 'Home')

@section('header')
    <x-header
        preTitle="Be healthier in body, soul and spirit."
        title="Live a lighter,"
        titleCursive="nourished life"
        action="Book Now"
        actionUrl="#"
        image="images/home-header.jpg">      
    </x-header>
@endsection

@section('content')
    <section class="relative py-32 w-5/6 mx-auto lg:mt-44">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">Thrive with our combination of</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">functional nutrition, coaching and mentoring.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 top-12 opacity-20 m-auto">
    </section>

    <section class="vetplant-bg">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 py-32 w-5/6 mx-auto">
            <div class="mb-6">
                <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">DO ANY OF THESE STATEMENTS</p>
                <p class="text-pomegranate text-5xl text-center font-cursive leading-3">apply to you?</p>
            </div>
            <div class="relative">
                <ul class="text-center lg:text-left">
                    <li class="mb-4">🥱 &nbsp; Tired, even exhausted with how you feel in your body.</li>
                    <li class="mb-4">😩 &nbsp; Desperate to improve your health.</li>
                    <li class="mb-4">🤢 &nbsp; Suffering with an unhealthy digestive system.</li>
                    <li class="mb-4">😖 &nbsp; Feeling stuck and frustrated with constant dieting and not keeping the weight off.</li>
                    <li>🤩 &nbsp; Want to improve your relationship with yourself, food and others.</li>
                </ul>  
                <img src="{{ asset('images/turquoise-arrow.svg') }}" alt="" class="absolute -bottom-2/3 left-0 right-0 m-auto z-10 md:-bottom-44">              
            </div>
        </div>
        <div class="relative grid grid-cols-1 lg:grid-cols-2 bg-darkBlue bg-blend-multiply py-16 lg:py-0">
            <div class="relative mx-auto lg:p-48">
                <img src="{{ asset('/images/woman1.jpg') }}" alt="" class="lg:block lg:absolute lg:top-24 lg:left-8 lg:shadow-2xl">
            </div>
            <div class="flex flex-col items-center lg:justify-center">
                <p class="text-5xl text-white text-center">You’ve come to</p>
                <p class="text-6xl text-pomegranate text-center mb-24 font-cursive leading-3">the right place!</p>
                <a href="javacsript:void()" class="button text-turquoise border-turquoise hover:bg-turquoise focus:bg-turquiose">BOOK NOW</a>
            </div>
        </div>
    </section>

    <section class="relative py-24 w-5/6 mx-auto grid grid-cols-1 gap-8 lg:mt-16 md:grid-cols-3">
        <div class="md:col-span-2">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl mb-8">How we can help...</p>
            <p class="font-sans text-darkBlue mb-8">At Life Lighter we partner with you to get to the root of your health challenges by combining evidence-based, functional nutrition and lifestyle medicine with the insightful, thought provoking and creative process of coaching to inspire you to maximize your well-being and potential.</p>
            <p class="font-sans text-darkBlue">This enables you, the client, to gain clarity on the challenges at hand and to move forward with achievable goals and lasting solutions.</p>
        </div>
        <div>
            <img src="{{ asset('/images/plant_2.svg') }}" alt="" class="w-36 mx-auto lg:w-64">
        </div>
    </section>

    <section class="grid grid-cols-1 gap-8 w-5/6 mx-auto md:grid-cols-4">
        <div class="md:col-span-2">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">Your gain and what</p>
            <p class="text-turquoise text-center font-cursive leading-3 text-6xl">you can experience</p>
        </div>
        <div class="bg-turquoise flex flex-col justify-center items-center p-8">
            <p class="text-white text-center font-cursive text-4xl leading-3">freedom</p>
            <p class="text-white font-sans tracking-ultrawide text-center">in being</p>
        </div>
        <div class="bg-pomegranate flex flex-col justify-center items-center p-8">
            <p class="text-white text-center font-cursive text-4xl leading-3">relief - </p>
            <p class="text-white font-sans tracking-ultrawide text-center">feeling lighter, hopeful</p>
        </div>
        <div class="bg-darkBlue flex flex-col justify-center items-center p-8 md:col-span-2">
            <p class="text-white text-center font-cursive text-4xl leading-3">health and wellbeing -</p>
            <p class="text-white text-center font-sans tracking-ultrawide">where you are now, on your way to where you are going</p>
        </div>
        <div class="bg-slate-600 flex flex-col justify-center items-center p-8 md:col-span-2">
            <p class="text-white text-center font-cursive text-4xl leading-3">practical guidance on</p>
            <p class="text-white font-sans tracking-ultrawide text-center">food intake individualized to your needs and circumstances</p>
        </div>
        <div class="bg-pomegranate flex flex-col justify-center items-center p-8">
            <p class="text-white text-center font-cursive text-4xl leading-3">confidence in</p>
            <p class="text-white font-sans tracking-ultrawide text-center">reaching your goals</p>
        </div>
        <div class="bg-turquoise flex flex-col justify-center items-center p-8 md:col-span-3">
            <p class="text-white text-center font-cursive text-4xl leading-3">greater understanding on how</p>
            <p class="text-white font-sans tracking-ultrawide text-center">your thoughts, will and emotions impact your state of wellbeing</p>
        </div>
        <div class="bg-slate-600 flex flex-col justify-center items-center p-8 md:col-span-2">
            <p class="text-white text-center font-cursive text-4xl leading-3">growth in your relationships -</p>
            <p class="text-white font-sans tracking-ultrawide text-center">with self, food and others</p>
        </div>
        <div class="bg-darkBlue flex flex-col justify-center items-center p-8 md:col-span-2">
            <p class="text-white text-center font-cursive text-4xl leading-3">understanding of the</p>
            <p class="text-white font-sans tracking-ultrawide text-center">impact of lifestyle components</p>
        </div>
    </section>

    <section class="relative py-32 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center">We invite you to take the first step towards a more</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">fulfilled, nourished, and healthier life by contacting us today.</p>
        <a href="javascript:void()" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Book now</a>
    </section>

    <section class="about-me py-16">
        <div class="container mx-auto w-5/6 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col justify-start md:col-span-3">
                <p class="text-turquoise text-center font-cursive text-5xl leading-3 md:text-left">meet</p>
                <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center md:text-left">Careen</p>  
                <div class="divider divider-left"></div>              
            </div>
            <div class="w-full h-64 bg-slate-200 shadow-2xl">
                <img src="" alt="foto" class="">
            </div>
            <div class="flex flex-col items-center md:col-span-2 md:items-start">
                <p class="font-bold uppercase text-2xl text-darkBlue">Hi. I am Careen Visagie.</p>
                <p class="font-sans text-darkBlue text-center mb-6 md:text-left">I am here to help you regain and improve your health and wellbeing by addressing the root causes of your challenges.</p>
                <p class="font-sans text-darkBlue text-center mb-6 md:text-left">I help you on your journey to live a lighter, nourished life – able to fulfill  your purpose, passions and potential.</p>
                <a href="javascript:void()" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Read more</a>
            </div>
        </div>
    </section>

    <section class="relative py-16 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center">Want more information on how I can help you?</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">Book a “Hello Session” now</p>
        <a href="javascript:void()" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Get started</a>
    </section>
    
@endsection