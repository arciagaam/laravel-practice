<x-layout>
    @include('partials._hero')
    @include('partials._search')
    @unless(count($listings) == 0)
        <div class="grid gap-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 px-4">
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        </div>
    @else
        <p>No Listings Found</p>
    @endunless

</x-layout>
