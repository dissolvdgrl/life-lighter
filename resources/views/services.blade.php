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
    <section class="relative pb-16 w-5/6 lg:w-4/6 mx-auto lg:mt-16 overflow-visible">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">The best investment you can ever make</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">is in your own health.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 -top-12 opacity-20 m-auto">
    </section>

    <section class="grid md:grid-cols-2 gap-16 w-5/6 lg:w-4/6 mx-auto py-16">
        <div class="flex flex-col justify-start">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center z-10 md:text-left">Work</p>
            <p class="text-pomegranate text-center font-cursive font-bold text-6xl leading-3 z-9 md:text-left">with us</p>
            <div class="mt-16 flex items-center">
                <img src="{{ asset('images/office-building.svg') }}" alt="Icon of an office building" class="mr-4">
                <p class="text-darkBlue w-full text-2xl">In-person at the practice</p>
            </div>
            <p class="font-cursive font-bold text-turquoise text-6xl my-8 ml-8">or</p>
            <div class="flex items-center">
                <img src="{{ asset('images/globe.svg') }}" alt="Icon of a globe" class="mr-4">
                <p class="text-darkBlue w-full text-2xl">In-person at the practice</p>
            </div>
        </div>
        <img src="{{ asset('/images/hand-pencil.jpg') }}" alt="" class="mx-auto mt-16 shadow-2xl">
    </section>

    <section class="w-5/6 lg:w-4/6 mx-auto py-16">
        <div class="bg-gray-100 p-8 transition-shadow duration-200 hover:shadow-xl mb-16">
            <p class="text-darkBlue uppercase font-sans font-bold text-3xl col-span-2">Nutrition</p>
            <p class="text-turquoise uppercase font-sans text-3xl col-span-2">Consultations</p>
            <div class="mt-8">
                <img src="{{ asset('images/scale.svg') }}" alt="Scale icon" class="mr-4 w-14">
                <p class="text-darkBlue font-bold">Weight-neutral, food freedom</p>
                <p class="mb-4">At Life Lighter we offer support, advice and guidance for people who want to be healthier in their own bodies.  We do not have one specific way of working with every client, as we have a client/ patient centred approach and work to meet each client at their point of need. The aim is food freedom and health at every size through sustainable actions.</p>
                <p class="mb-4">This may include one or a combination of the following:</p>
                <ul class="mb-4 ml-4 list-disc">
                    <li>helping a client to improve their relationship with themselves and food</li>
                    <li>supporting clients to be healthier no matter what their size</li>
                    <li>finding food freedom</li>
                    <li>growing in awareness of the cues involved with eating, and self-care to support this</li>
                    <li>nutrition education about food portions and meal planning, where applicable</li>
                    <li>helping a client to understand how thoughts and emotions impact their health and actions, and equipping them to address this</li>
                    <li>working towards improvement in health and wellbeing by making sustainable changes to habits that impact this; through making the desirable changes, weight loss often is a by-product and not the end goal</li>
                </ul>
                <p class="mb-4">A non-diet approach is used where individuals can grow in their ability to eat according to their body’s needs and improve in selfcare and their ability to nourish their needs.</p>
                <p>We do not offer a quick fix or a diet approach.</p>

            </div>
            <div class="mt-8">
                <img src="{{ asset('images/stomach.svg') }}" alt="Stomach icon" class="mr-4 w-14 mb-2">
                <p class="text-darkBlue font-bold">Wellness nutrition</p>
                <ul class="mb-4 ml-4 list-disc">
                    <li>Nutrigenomics (nutrition according to your genetic make-up) – we use DNA testing to help you identify the root causes of your health challenges and to improve your wellbeing.</li>
                    <li>Health Coaching to help you change behaviour towards optimal wellbeing.</li>
                    <li>Grow in selfcare:  grow in awareness of your needs – whether it is on a physical, emotional, thought-life, or spiritual level – and gain understanding of how to satisfy those needs and the implementation of selfcare.</li>
                </ul>
            </div>
            <div class="mt-8">
                <img src="{{ asset('images/virus.svg') }}" alt="Virus icon" class="mr-4 w-14 mb-2">
                <p class="text-darkBlue font-bold mb-4">Nutrition therapy</p>
                <p>The practice special interest in nutrition therapy includes:</p>
                <ul class="mb-4 ml-4 list-disc">
                    <li>Diseases of the digestive tract including FODMAP guidance for irritable bowel disease</li>
                    <li>Auto-immune conditions </li>
                    <li>Diseases of lifestyle (including cholesterol problems, hypertension, unhealthy blood sugar regulation)</li>
                </ul>
            </div>
            <div class="mt-8">
                <img src="{{ asset('images/other.svg') }}" alt="Virus icon" class="mr-4 w-14 mb-2">
                <p class="text-darkBlue font-bold mb-4">Other</p>
                <p><span class="font-bold">Vitality Nutrition Assessments</span> – earn 1000 Vitality points with a specific Vitality consultation or claim your points with any regular nutrition consultation.</p>
                <p><span class="font-bold">BestMed Tempo Wellness</span> consultations are offered at this practice.  Three consultations are offered per year to BestMed patients who have completed their Health Screening and are eligible for Dietitian Consultations.</p>
            </div>
        </div>

        <div class="bg-gray-100 grid p-8 transition-shadow duration-200 hover:shadow-xl mb-16">
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
        <div class="bg-gray-100 grid p-8 transition-shadow duration-200 hover:shadow-xl mb-16">
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
