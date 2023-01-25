@props(['tagLists'])

@php
    $tags = explode(',', $tagLists);
@endphp

<ul class="flex flex-row items-start justify-start gap-2 flex-wrap">
    @foreach ($tags as $tag)
    <li>
        <a href="/?tag={{ $tag }}"class="bg-black text-white text-xs font-bold rounded-full py-1 px-3">{{ ucfirst(trim($tag)) }}</a>
    </li>
    @endforeach
</ul>
