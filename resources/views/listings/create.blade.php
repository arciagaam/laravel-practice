<x-layout>

    <x-card>

        <div class="flex flex-col items-center">
            <p class="font-bold text-2xl">CREATE A GIG</p>
            <p class="font-normal text-sm">Post a gig to find a developer</p>
        </div>

        <form class="flex flex-col gap-3 w-[80%]" action="/listings" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="flex flex-col focus-within:font-medium">
                <label for="company">Company Name</label>
                <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25" type="text" name="company" id="company" value="{{old('company')}}">

                @error('company')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col focus-within:font-medium">
                <label for="title">Job Title</label>
                <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25" type="text" name="title" id="title" placeholder="Example: Senior Laravel Developer" value="{{old('title')}}">

                @error('title')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col focus-within:font-medium">
                <label for="location">Job Location</label>
                <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25" type="text" name="location" id="location" value="{{old('location')}}">

                @error('location')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col focus-within:font-medium">
                <label for="website">Web/Application website</label>
                <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25"
                    type="text" name="website" id="website" value="{{old('website')}}">

                @error('website')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col focus-within:font-medium">
                <label for="email">Contact Email</label>
                <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25"
                    type="text" name="email" id="email" value="{{old('email')}}">

                @error('email')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col focus-within:font-medium">
                <label for="tags">Tags (Comma Separated)</label>
                <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25"
                    type="text" name="tags" id="tags" value="{{old('company')}}">

                @error('tags')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex flex-col">
                <label for="logo">Company Logo</label>
                <input class="outline-none rounded-md py-1 px-2" type="file" name="logo" id="logo">

                @error('logo')
                <p class="text-red-500 text-xs">{{ $message }}</p>
            @enderror
            </div>

            <div class="flex flex-col focus-within:font-medium">
                <label for="description">Job Description</label>
                <textarea class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25 resize-none min-h-[200px]" type="text" name="description" id="description" placeholder="Include tasks, requirements, salary, etc.">{{old('description')}}</textarea>

                @error('description')
                    <p class="text-red-500 text-xs">{{ $message }}</p>
                @enderror
            </div>

            <button class="bg-red-500" type="submit">Submit Gig</button>
            <a href="/">Back</a>

        </form>

    </x-card>

</x-layout>
