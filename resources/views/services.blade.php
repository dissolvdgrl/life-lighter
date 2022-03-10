@extends('layouts.master')

@section('page-title', 'Services')

@section('header')
    <x-header
        preTitle=""
        title="Services"
        titleCursive="personalised for you"
        action="Book Now"
        actionUrl="#"
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
@endsection