@props(['textRegular', 'textCursive', 'verse'])

<div class="bg-gray-100 p-8 md:col-span-3">
    <p class="text-gray-500 tracking-widest text-center">“{{ $textRegular }}</p>
    <p class="text-center text-turquoise font-cursive text-4xl"> {{ $textCursive }}</p>
    <p class="text-xs font-bold text-darkBlue tracking-ultrawide uppercase text-center mt-4">{{ $verse }}</p>
</div> <!-- col 4 -->
