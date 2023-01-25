@if(session()->has('message')){
    <p class="animate-toast fixed -top-[50px] self-center bg-green-500 py-2 px-10 text-white font-medium rounded-xl">{{session('message')}}</p>
}
@endif
