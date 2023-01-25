@props(['listing'])

<div class="flex flex-col rounded-md shadow-md
">
    <div class="flex flex-row justify-center items-center self-center w-[80%]">
        <img class="h-auto w-fit" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
    </div>

    <div class="flex flex-col p-5 gap-5">
        <p class="text-md font-medium">{{$listing->title}}</p>
        <x-listing-tags :tagLists="$listing->tags"/>
        <div class="flex flex-col gap-1">
            <p class="text-xs font-normal">{{ $listing->company }}</p>
            <p class="text-xs font-normal">{{ $listing->location }}</p>
        </div>
        <p class="text-xs font-normal">{{ $listing->email }}</p>
        <p class="text-xs font-normal">{{ $listing->website }}</p>

        <a href="/listings/{{ $listing['id'] }}">Read more</a>
    </div>
</div>