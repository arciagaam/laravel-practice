<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
    @vite('resources/css/app.css')
</head>

<body class="relative flex flex-col flex-1 min-h-[100vh]">
    {{-- NAVBAR --}}
    <div class="flex flex-row justify-between items-center p-3">
        <a href="/"><img class="rounded-full h-[75px]" src="{{ asset('images/logo.png') }}" alt=""></a>


        <div class="flex flex-row gap-4 items-center">

            @auth
                <p>Welcome {{ auth()->user()->name }}</p>
                <a href="/listings/manage" class="bg-red-500 text-white font-medium rounded-md leading-none min-w-[100px] text-center py-2 align-middle px-4 hover:bg-red-600 transition-background ease-in-out duration-200">
                    Manage Listings
                </a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="bg-red-500 text-white font-medium rounded-md leading-none min-w-[100px] text-center py-2 align-middle px-4 hover:bg-red-600 transition-background ease-in-out duration-200">
                        Logout
                    </button>
                </form>

            @else

            <a href="/login" class="border border-red-500 font-medium rounded-md leading-none min-w-[100px] text-center align-middle py-2 px-4 hover:bg-red-500 hover:text-white transition-background ease-in-out duration-200">
                Login
            </a>
            <a href="/register" class="bg-red-500 text-white font-medium rounded-md leading-none min-w-[100px] text-center py-2 align-middle px-4 hover:bg-red-600 transition-background ease-in-out duration-200">
                Register
            </a>

            @endauth

        </div>
    </div>

    {{-- VIEW --}}
    <div class="flex flex-col">
        {{ $slot }}
        {{-- @yield('content') --}}
    </div>

    {{-- FOOTER --}}
    <div class="grid grid-cols-3 bg-red-500 min-h-[10vh] px-5 mt-auto">
        <p></p>
        <div class="flex flex-row items-center justify-center">
            <p class="font-bold">Copyright</p>
        </div>
        <div class="flex flex-row items-center justify-end">
            <a href="/listings/create" class="bg-white text-red-500 font-bold py-3 px-4 rounded-md w-fit h-fit">Post
                Job</a>
        </div>
    </div>

    <x-flash-message />
</body>

</html>
