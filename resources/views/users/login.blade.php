<x-layout>

    <div class="flex flex-col items-center justify-center">

        <x-card>
            <div class="flex flex-col items-center">
                <p class="font-bold text-2xl">Login</p>
            </div>

            <form class="flex flex-col gap-5 w-[80%]" action="/user/authenticate" method="POST">
                @csrf

                <div class="flex flex-col focus-within:font-medium">
                    <label for="email">Email</label>
                    <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25"
                        type="text" name="email" id="email" value="{{ old('email') }}">

                    @error('email')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex flex-col focus-within:font-medium">
                    <label for="password">Password</label>
                    <input class="outline-none bg-slate-100 rounded-md py-1 px-2 focus:border focus:border-black/25" type="password" name="password" id="password" value="{{ old('password') }}">

                    @error('password')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-red-500 py-2 px-5 rounded-md text-white font-bold">Sign In</button>
            </form>
        </x-card>

    </div>

</x-layout>
