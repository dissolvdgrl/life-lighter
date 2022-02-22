@extends('layouts.master')

@section('page-title', 'Blog')

@section('header')
    <x-header
        preTitle=""
        title="Blog"
        titleCursive="all about heath"
        action="Read more"
        actionUrl="#postsContainer"
        image="images/blog-header.jpg">      
    </x-header>
@endsection

@section('content')
    <section class="relative py-32 w-5/6 lg:w-4/6 mx-auto lg:mt-44">
        <p class="text-turquoise tracking-ultrawide font-sans text-3xl text-center">Thrive with our combination of</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center">functional nutrition, coaching and mentoring.</p>
        <div class="divider"></div>
        <img src="{{ asset('images/plant_1.svg') }}" alt="" class="absolute left-0 right-0 -z-10 top-12 opacity-20 m-auto">
    </section>

    @foreach ($posts as $post)
        <img src="{{ $post->image('featured_image', 'default') }}" alt="">
        <p class="font-bold text-pomegranate">{{ $post->title }}</p>        
    @endforeach
@endsection