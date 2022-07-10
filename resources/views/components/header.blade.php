@props(['preTitle', 'title', 'titleCursive', 'action', 'actionUrl', 'image', 'newtab'])

<header class="relative pt-36 md:py-48">
    <div class="container lg:max-w-5xl mx-auto p-8 tracking-wide">
        <p class="font-sans text-gray-400 md:text-xl">{{ $preTitle }}</p>
        <h1 class="font-bold text-6xl text-darkBlue tracking-wide">{{ $title }} </h1>
        <h2 class="text-6xl text-turquoise font-bold font-cursive">{{ $titleCursive }}</h2>
        <a href="{{ $actionUrl }}" class="button border-pomegranate text-pomegranate mt-8 hover:bg-pomegranate" target="{{ $newtab ?? '' }}">{{ $action }}</a>
    </div>
    <header-clip-path></header-clip-path>
    <img src="{{ asset($image) }}" alt="" class="header-img w-full md:absolute md:bottom-0 md:-z-9 md:pb-16 lg:pb-0 lg:top-0">
</header>
