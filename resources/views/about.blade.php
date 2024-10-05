@extends('layout')
@section('content')
<div class="flex justify-center items-center flex-col">
    <div class="h-[70vh] w-full flex flex-col relative overflow-hidden">
        <img src="{{ asset('assets/company.jpg')}}" alt="" class=" object-cover  w-full h-full absolute inset-0">
        <div class="flex flex-col relative w-full h-full justify-center inset-0 ">
            <button  class="w-10 h-10 rotate-180 absolute top-10 left-10 text-white font-extrabold">
                <a href="{{ route('home') }}">
                    <x-heroicon-o-arrow-small-right />
                </a>
            </button>
            <h1 class="lg:text-7xl text-5xl font-bold text-black max-w-screen-lg mx-auto">About Us</h1>
        </div>
    </div>
    <h1 class="mt-24 lg:text-8xl text-5xl font-bold">Our Team</h1>
    <div class="relative flex items-center max-w-screen-xl mx-auto md:px-5">
        <div class="flex w-full justify-between absolute z-[999]  px-5 lg:px-0">
            <button id="prev" class="w-10 h-10 rotate-180  text-white font-extrabold bg-blue-700 rounded-full p-2 lg:-ml-5">
                <x-heroicon-o-arrow-small-right />
            </button>
            <button id="next" class="w-10 h-10 rotate-0  text-white font-extrabold bg-blue-700 rounded-full p-2 lg:mr-5">
                <x-heroicon-o-arrow-small-right />
            </button>
        </div>
        <div class="w-full max-w-screen-xl mx-auto relative flex overflow-hidden px-5 carosels py-20 items-center">
            @for($i = 0; $i < 5; $i++)

            <div class="w-full grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 min-w-full gap-5 carosel px-2 ">
                <div card class=" w-full rounded-md  border border-slate-300 overflow-hidden">
                    <img src="{{ asset('assets/people1.jpg')}}" alt="" class=" object-cover w-full h-64">
                    <div class="flex flex-col justify-between min-h-52 p-4">
                        <h1 class=" text-center text-2xl font-semibold">REUSMANA SUJANI</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odio porro quibusdam minus nostrum quasi temporibus deserunt consequatur voluptatem. Minima?</p>
                        <p class="text-center text-slate-700">CEO</p>
                    </div>
                </div>
                <div card class=" w-full rounded-md   border border-slate-300 overflow-hidden">
                    <img src="{{ asset('assets/people2.jpg')}}" alt="" class=" object-cover w-full h-64">
                    <div class="flex flex-col justify-between min-h-52 p-4">
                        <h1 class=" text-center text-2xl font-semibold">REUSMANA SUJANI</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odio porro quibusdam minus nostrum quasi temporibus deserunt consequatur voluptatem. Minima?</p>
                        <p class="text-center text-slate-700">CEO</p>
                    </div>
                </div>
                <div card class=" w-full   border border-slate-300 overflow-hidden">
                    <img src="{{ asset('assets/people1.jpg')}}" alt="" class=" object-cover w-full h-64">
                    <div class="flex flex-col justify-between min-h-52 p-4">
                        <h1 class=" text-center text-2xl font-semibold">REUSMANA SUJANI</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita odio porro quibusdam minus nostrum quasi temporibus deserunt consequatur voluptatem. Minima?</p>
                        <p class="text-center text-slate-700">CEO</p>
                    </div>
                </div>
            </div>
            @endfor
            
        </div>

    </div>
   
    @include('components.footer')
</div>

<script>
    const next = document.querySelector('#next');
    const prev = document.querySelector('#prev');
    const carosel = document.querySelector('.carosels');
    const widthCarosel = document.querySelector('.carosel').offsetWidth;
    next.addEventListener('click', () => {
        console.log(widthCarosel)
        console.log(document.querySelector('.carosel'))
        carosel.scrollLeft += widthCarosel
    })
    prev.addEventListener('click', () => {
        carosel.scrollLeft -= widthCarosel
    })
</script>
@endsection