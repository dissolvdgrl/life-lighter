@extends('layouts.master')

@section('page-title', 'Posts tagged with '. $slug)

@section('header')
    <x-header
        preTitle="Posts tagged with"
        :title="$slug"
        titleCursive=""
        action="Read more"
        actionUrl="#postsContainer"
        newtab=""
        image="images/about-header.jpg">
    </x-header>
@endsection

@section('content')
    <section id="postsContainer" class="relative py-32 w-5/6 lg:w-4/6 mx-auto lg:mt-44">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-16">
            @foreach ($tags as $post)
                <div class="md:col-span-1 flex flex-col max-w-md shadow-xl transition-shadow duration-150 hover:shadow-md focus:shadow-md">
                    <img src="{{ $post->images('featured_image', 'cover')[0] }}" alt="{{ $post->title }} featured image" class="max-w-md w-full">
                    <div class="h-full p-4 flex flex-col items-start">
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
                        <p class="font-bold text-pomegranate mt-auto">
                            <a href="/blog/{{ $post->slug }}" class="continue-reading">Continue reading <span>></span></a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="relative py-16 w-5/6 mx-auto flex flex-col items-center">
        <p class="text-turquoise tracking-widest font-sans text-2xl text-center">Want more information on how I can help you?</p>
        <p class="text-darkBlue uppercase font-sans font-bold text-3xl text-center mb-6">Book a “Hello Session” now</p>
        <a href="javascript:void()" class="button border-pomegranate text-pomegranate hover:bg-pomegranate focus:bg-pomegranate">Get started</a>
    </section>
@endsection
