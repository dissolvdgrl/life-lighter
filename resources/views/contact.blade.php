@extends('layouts.master')

@section('page-title', 'Contact')

@section('header')
    <header class="relative pt-36 md:pt-48 md:pb-8">
        <div class="container lg:max-w-5xl mx-auto p-8 tracking-wide">
            <p class="font-sans text-gray-400 md:text-xl">Insert Text</p>
            <h1 class="font-bold text-6xl text-darkBlue tracking-wide">Contact me</h1>
            <h2 class="text-4xl italic lg:leading-3 text-turquoise font-cursive font-bold md:leading-2">Insert text</h2>
            <a href="https://lifelighter.setmore.com/" class="button border-pomegranate text-pomegranate mt-8 hover:bg-pomegranate" target="_blank">Book now</a>
        </div>
    </header>
@endsection

@section('content')
    <section class="relative pt-0 w-5/6 lg:w-4/6 mx-auto mt-32 lg:mt-16">
        <contact-form />
    </section>
@endsection

@section('footer-verse')
    <x-footer-verse
        text-regular="…but I have come to give you everything in abundance, more than you expect –"
        text-cursive="life in its fullness until you overflow!”"
        verse="John 10:10 TPT"
    ></x-footer-verse>
@endsection
<script>
    import ContactForm from "../js/components/ContactForm";
    export default {
        components: {ContactForm}
    }
</script>
