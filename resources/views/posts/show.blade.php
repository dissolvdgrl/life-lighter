@extends('layouts.master')

@section('page-title', $post->title)

@section('header')
    <x-header
        preTitle=""
        title="{{ $post->title }}"
        titleCursive="{{ $post->description }}"
        action="Read more"
        actionUrl="#postsContainer"
        image="{{ $post->images('featured_image', 'cover')[0] }}">      
    </x-header>
@endsection

@section('content')
    <section class="relative py-32 w-5/6 lg:w-4/6 mx-auto lg:mt-44">   
        
    </section>
@endsection