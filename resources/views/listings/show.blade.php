
<x-layout>
    <x-card>
        <div class="flex flex-col justify-center gap-5 items-center">
            <img class="w-[70%]" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}" alt="">
            
            <div class="flex flex-col items-center gap-2">
                <p class="text-center">{{ $listing->title }}</p>
                <p>{{ $listing->company }}</p>
                <x-listing-tags :tagLists="$listing->tags"/>
            </div>

            
        </div>

        <hr class="bg-slate-400 min-h-[1px] max-h-[1px] w-full">

        <div class="flex flex-col items-center gap-5">
            <p class="text-center">{{ $listing->description }}</p>

            <a href="mailto:{{$listing->email}}" class="w-full bg-red-500 text-white text-center rounded-md py-2">Contact Employer</a>
        </div>
    </x-card>

</x-layout>
