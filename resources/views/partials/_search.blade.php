<form class="flex flex-row items-center justify-center my-5 mx-3" action="">
    <div
        class="flex flex-row w-full justify-between items-center p-2 gap-5 border border-slate-200 self-center justify-self-center rounded-md lg:w-[80%] ">
        <div class="flex flex-row flex-1 gap-2">
            <p>O</p>
            <input class="w-full bg-transparent outline-none" name="search" type="text"
                placeholder="Search Laravel Gigs" value={{ old('search') }}>
        </div>
        <button type="submit" id="search-btn" class="text-white bg-red-500 font-medium rounded-md py-2 px-4 cursor-pointer hover:bg-red-600">
            Search
        </button>
    </div>
</form>
