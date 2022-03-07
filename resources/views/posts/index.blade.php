@extends('layouts.master')

@section('page-title', 'Blog')

@section('header')
    <x-header
        preTitle=""
        title="Blog"
        titleCursive="all about heath"
        action="Read more"
        actionUrl="#postsContainer"
        newtab=""
        image="images/blog-header.jpg">      
    </x-header>
@endsection

@section('content')
    <section id="postsContainer" class="relative py-32 w-5/6 lg:w-4/6 mx-auto lg:mt-44">   
        <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-16">
            @foreach ($posts as $post)
                @if ($loop->first)
                    <div class="col-span-3 grid grid-cols-1 lg:grid-cols-2 gap-16 mb-16">
                        <img src="{{ $post->images('featured_image', 'thumbnail')[0] }}" alt="{{ $post->title }} featured image" class="max-w-md w-full">
                        <div class="">
                            <p class="tex-sm text-gray-300 mb-2">{{ date('d F Y', strToTime($post->created_at)) }} - {{ $post->author }}</p>
                            <p class="font-bold text-darkBlue uppercase text-4xl mb-4">{{ $post->title }}</p> 
                            <p class="mb-4">
                                <span class="uppercase text-darkBlue font-bold mr-3">TAGS:</span>   
                                @foreach ($post->tags as $tag)
                                    <a href="{{ $tag->slug }}" class="bg-turquoise px-2 py-1 text-white rounded-full text-xs mr-2">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach 
                            </p> 
                            <p class="mb-4">{{ $post->description }}</p>
                            
                            <p class="font-bold text-pomegranate">
                                <a href="blog/{{ $post->slug }}" class="continue-reading">Continue reading <span>></span></a>
                            </p> 
                        </div>
                    </div>                
                @else
                    <div class="shadow-xl transition-shadow duration-150 hover:shadow-md focus:shadow-md">
                        <img src="{{ $post->images('featured_image', 'cover')[0] }}" alt="{{ $post->title }} featured image" class="max-w-md w-full">
                        <div class=" p-4">
                            <p class="tex-sm text-gray-300 mb-2">{{ date('d F Y', strToTime($post->created_at)) }} - {{ $post->author }}</p>
                            <p class="font-bold text-darkBlue uppercase text-2xl mb-4">{{ $post->title }}</p> 
                            <p class="mb-4">
                                <span class="uppercase text-darkBlue font-bold mr-3">TAGS:</span>   
                                @foreach ($post->tags as $tag)
                                    <a href="{{ $tag->slug }}" class="bg-turquoise px-2 py-1 text-white rounded-full text-xs mr-2">
                                        #{{ $tag->name }}
                                    </a>
                                @endforeach 
                            </p> 
                            <p class="mb-4">{{ $post->description }}</p>                            
                            <p class="font-bold text-pomegranate">
                                <a href="blog/{{ $post->slug }}" class="continue-reading">Continue reading <span>></span></a>
                            </p> 
                        </div>        
                    </div>                    
                @endif                
            @endforeach
        </div>        
    </section>

    <section class="relative py-16 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center">Want more information on how I can help you?</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">Book a “Hello Session” now</p>
        <a href="javascript:void()" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Get started</a>
    </section>
@endsection