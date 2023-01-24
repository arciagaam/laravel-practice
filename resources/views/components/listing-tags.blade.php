@props(['tagLists'])

@php
    $tags = explode(',', $tagLists);
@endphp

<ul class="flex flex-row gap-2">
    @foreach ($tags as $tag)
    <li>
        <a  href="/?tag={{ $tag }}"class="bg-black text-white font-bold rounded-full py-1 px-3">{{ ucfirst(trim($tag)) }}</a>
    </li>
    @endforeach
</ul>
