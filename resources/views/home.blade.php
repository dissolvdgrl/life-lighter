@extends('layouts.master')

@section('page-title', 'Home')

@section('content')
    <section class="relative py-32 w-5/6 mx-auto">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">Thrive with our combination of</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">functional nutrition, coaching and mentoring.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 top-12 opacity-20 m-auto">
    </section>

    <section class="vetplant-bg">
        <div class="grid grid-cols-1 gap-8 py-32 w-5/6 mx-auto">
            <div class="mb-6">
                <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">DO ANY OF THESE STATEMENTS</p>
                <p class="text-pomegranate text-3xl text-center">APPLY TO YOU?</p>
            </div>
            <div class="relative">
                <ul class="text-center">
                    <li class="mb-4">🥱 &nbsp; Tired, even exhausted with how you feel in your body.</li>
                    <li class="mb-4">😩 &nbsp; Desperate to improve your health.</li>
                    <li class="mb-4">🤢 &nbsp; Suffering with an unhealthy digestive system.</li>
                    <li class="mb-4">😖 &nbsp; Feeling stuck and frustrated with constant dieting and not keeping the weight off.</li>
                    <li>🤩 &nbsp; Want to improve your relationship with yourself, food and others.</li>
                </ul>  
                <img src="{{ asset('images/turquoise-arrow.svg') }}" alt="" class="absolute -bottom-2/3 left-0 right-0 m-auto">              
            </div>
        </div>
        <div class="grid grid-cols-1 bg-darkBlue bg-blend-multiply py-16">
            <div class="relative">
                <img src="{{ asset('/images/woman1.jpg') }}" alt="">
            </div>
            <div class="flex flex-col items-center">
                <p class="text-5xl text-white text-center">You’ve come to</p>
                <p class="text-5xl text-pomegranate text-center mb-8">the right place!</p>
                <a href="javacsript:void()" class="button text-turquoise border-turquoise hover:bg-turquoise focus:bg-turquiose">BOOK NOW</a>
            </div>
        </div>
    </section>

    <section class="relative py-32 w-5/6 mx-auto grid grid-cols-1 gap-8">
        <div>
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl mb-8">How we can help...</p>
            <p class="font-sans text-darkBlue mb-8">At Life Lighter we partner with you to get to the root of your health challenges by combining evidence-based, functional nutrition and lifestyle medicine with the insightful, thought provoking and creative process of coaching to inspire you to maximize your well-being and potential.</p>
            <p class="font-sans text-darkBlue">This enables you, the client, to gain clarity on the challenges at hand and to move forward with achievable goals and lasting solutions.</p>
        </div>
        <div>
            <img src="{{ asset('/images/plant_2.svg') }}" alt="" class="w-72 mx-auto">
        </div>
    </section>

    <section class="grid grid-cols-1 gap-8 w-5/6 mx-auto">
        <div>
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">Your gain and what</p>
            <p class="text-turquoise text-3xl text-center">you can experience</p>
        </div>
        <div class="bg-turquoise flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">freedom</p>
            <p class="text-white font-sans tracking-ultrawide text-center">in being</p>
        </div>
        <div class="bg-pomegranate flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">relief - </p>
            <p class="text-white font-sans tracking-ultrawide text-center">feeling lighter, hopeful</p>
        </div>
        <div class="bg-darkBlue flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">health and wellbeing -</p>
            <p class="text-white font-sans tracking-ultrawide">where you are now, on your way to where you are going</p>
        </div>
        <div class="bg-slate-600 flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">practical guidance on</p>
            <p class="text-white font-sans tracking-ultrawide text-center">food intake individualized to your needs and circumstances</p>
        </div>
        <div class="bg-pomegranate flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">confidence in</p>
            <p class="text-white font-sans tracking-ultrawide text-center">reaching your goals</p>
        </div>
        <div class="bg-turquoise flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">greater understanding on how</p>
            <p class="text-white font-sans tracking-ultrawide text-center">your thoughts, will and emotions impact your state of wellbeing</p>
        </div>
        <div class="bg-slate-600 flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">growth in your relationships -</p>
            <p class="text-white font-sans tracking-ultrawide text-center">with self, food and others</p>
        </div>
        <div class="bg-darkBlue flex flex-col justify-center items-center p-8">
            <p class="text-white text-center">understanding of the</p>
            <p class="text-white font-sans tracking-ultrawide text-center">impact of lifestyle components</p>
        </div>
    </section>
    
@endsection