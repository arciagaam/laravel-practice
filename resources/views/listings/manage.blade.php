<x-layout>
    <x-card>
        @unless($listings->isEmpty())
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left">Listing</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listings as $listing)
                        <tr>
                            <td class="text-md">{{ $listing->title }}</td>
                            <td>
                                <div class="flex flex-row w-full justify-evenly">
                                    <a href="/listings/{{ $listing->id }}/edit">Edit</a>
                                    <form method="POST" action="/listings/{{ $listing->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You have no listings</p>
        @endunless

    </x-card>
</x-layout>