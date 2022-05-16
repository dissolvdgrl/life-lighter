@extends('layouts.master')

@section('page-title', $post->title)

@section('header')
    <x-post-header
        title="{{ $post->title }}"
        description="{{ $post->description }}"
        image="{{ $post->images('featured_image', 'cover')[0] }}"
        postDate="{{ $post->created_at }}"
        author="{{ $post->author }}"
        :tags="$post->tags">
    </x-post-header>
@endsection

@section('content')
    <section id="postContent" class="relative py-32 w-5/6 lg:w-1/2 mx-auto lg:mt-44">
        {!! $post->content !!}
    </section>
@endsection
