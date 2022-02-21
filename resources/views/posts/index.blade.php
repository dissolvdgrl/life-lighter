@extends('layouts.master')

@section('content')
    <h1>ALL POSTS GO HERE</h1>

    @foreach ($posts as $post)
        <p class="font-bold text-pomegranate">{{ $post->title }}</p>        
    @endforeach
@endsection