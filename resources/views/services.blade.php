@extends('layouts.master')

@section('page-title', 'Services')

@section('header')
    <x-header
        preTitle=""
        title="Services"
        titleCursive="personalised for you"
        action="Book Now"
        actionUrl="https://booking.setmore.com/scheduleappointment/65f8b765-3315-4ad8-b703-9d0987a6ce79/services/s25c21496694829911?source=easyshare"
        newtab="_blank"
        image="images/services-header.jpg">
    </x-header>
@endsection

@section('content')
    <section class="relative py-32 w-5/6 lg:w-4/6 mx-auto lg:mt-44">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">The best investment you can ever make</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">is in your own health.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 top-12 opacity-20 m-auto">
    </section>

    <section class="grid md:grid-cols-2 gap-16 w-5/6 lg:w-4/6 mx-auto py-16">
        <div class="flex flex-col justify-start">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center z-10 md:text-left">Work</p>
            <p class="text-pomegranate text-center font-cursive font-bold text-4xl leading-3 z-9 md:text-left">with us</p>
            <div class="mt-16 flex items-center">
                <img src="{{ asset('images/office-building.svg') }}" alt="Icon of an office building" class="mr-4">
                <p class="text-darkBlue w-full text-2xl">In-person at the practice</p>
            </div>
            <p class="font-cursive uppercase font-bold text-turquoise text-4xl my-8 ml-8">or</p>
            <div class="flex items-center">
                <img src="{{ asset('images/globe.svg') }}" alt="Icon of a globe" class="mr-4">
                <p class="text-darkBlue w-full text-2xl">In-person at the practice</p>
            </div>
        </div>
        <img src="{{ asset('/images/hand-pencil.jpg') }}" alt="" class="mx-auto mt-16 shadow-2xl">
    </section>

    <section class="grid md:grid-cols-2 gap-16 w-5/6 lg:w-4/6 mx-auto py-16">
        <div class="bg-gray-100 grid grid-cols-1 md:grid-cols-2 md:col-span-2 p-8 transition-shadow duration-200 hover:shadow-xl">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl col-span-2">Nutrition</p>
            <p class="text-turquoise uppercase font-sans text-3xl col-span-2">Consultations</p>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/scale.svg') }}" alt="Scale icon" class="mr-4 w-14">
                <p class="text-darkBlue">Weight-neutral, food freedom</p>
            </div>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/stomach.svg') }}" alt="Stomach icon" class="mr-4 w-14">
                <p class="text-darkBlue">Wellness nutrition</p>
            </div>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/virus.svg') }}" alt="Virus icon" class="mr-4 w-14">
                <p class="text-darkBlue">Nutrition therapy</p>
            </div>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/other.svg') }}" alt="Virus icon" class="mr-4 w-14">
                <p class="text-darkBlue">Other</p>
            </div>
        </div>
        <div class="bg-gray-100 grid p-8 transition-shadow duration-200 hover:shadow-xl">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl ">Coaching</p>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/health-coach.svg') }}" alt="health coach icon" class="mr-4 w-14">
                <p class="text-darkBlue">Health Coaching</p>
            </div>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/life-coach.svg') }}" alt=" life coach icon" class="mr-4 w-14">
                <p class="text-darkBlue">Life Coaching</p>
            </div>
        </div>
        <div class="bg-gray-100 grid p-8 transition-shadow duration-200 hover:shadow-xl">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl ">Mentoring</p>
            <div class="flex items-center mt-8">
                <img src="{{ asset('images/mentoring.svg') }}" alt="Scale icon" class="mr-4 w-14">
                <p class="text-darkBlue"></p>
            </div>
        </div>
    </section>

    <section class="relative py-16 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center mb-2">Be healthier. Get a hop and a skip back in your step!</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">Book a “Hello Session” now</p>
        <a href="https://booking.setmore.com/scheduleappointment/65f8b765-3315-4ad8-b703-9d0987a6ce79/services/s25c21496694829911?source=easyshare" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate" target="_blank">Get started</a>
    </section>
@endsection

@section('footer-verse')
    <x-footer-verse
        text-regular="Beloved friend, I pray that you are prospering in every way and that you continually enjoy good health,"
        text-cursive="just as your soul is prospering.”"
        verse="3 John 1:2  TPT"
    ></x-footer-verse>
@endsection
