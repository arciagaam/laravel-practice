<x-layout>
    @include('partials._hero')
    @include('partials._search')
    @unless(count($listings) == 0)

        <div class="flex flex-col gap-3">
            <div class="grid gap-3 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 px-4">
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>

            <div class="px-5 py-4">
                {{$listings->links()}}
            </div>
        </div>
    @else
        <p>No Listings Found</p>
    @endunless
</x-layout>
