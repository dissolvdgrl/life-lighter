@props(['title', 'description', 'image', 'postDate', 'author', 'tags'])

<header class="relative pt-36 md:py-32 overflow-hidden">
    <div class="relative container lg:max-w-5xl mx-auto p-8 tracking-wide z-10">
        <h1 class="font-bold text-6xl text-darkBlue tracking-wide">{{ $title }} </h1>
        <h2 class="text-3xl text-gray-600 font-sans mt-4">{{ $description }}</h2>
        <p class="text-xl mt-16 text-gray-400">by {{ $author }} on <span class="font-bold">{{ date('d F Y', strToTime($postDate)) }}</span></p>
        <p class="mt-4">
            @foreach ($tags as $tag)
                <a href="/tags/{{ $tag->slug }}" class="bg-turquoise px-2 py-1 text-white rounded-full text-xs mr-2">
                    {{ $tag->name }}
                </a>
            @endforeach
        </p>
    </div>
    <div class="absolute top-0 z-9 w-full">
        <img src="{{ asset($image) }}" alt="" class="opacity-10 w-full">
    </div>
</header>
