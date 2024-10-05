@extends('layout')
@section('content')
<div class="flex justify-center items-center flex-col">
    <div class="h-[70vh] w-full flex flex-col relative overflow-hidden">
        <img src="{{ asset('assets/paper2.jpg')}}" alt="" class=" object-cover  w-full h-full absolute inset-0">
        <div class="flex flex-col relative w-full h-full justify-center inset-0 ">
            <button  class="w-10 h-10 rotate-180 absolute top-10 left-10 text-white font-extrabold">
                <a href="{{ route('home') }}">
                    <x-heroicon-o-arrow-small-right />
                </a>
            </button>
            <h1 class="lg:text-7xl text-5xl font-bold text-black max-w-screen-lg mx-auto">Pages </h1>
        </div>
    </div>
    <div class="flex flex-col px-10 justify-start items-start w-full py-24 gap-5">

        <h1 class=" lg:text-8xl text-5xl font-bold self-start">
            {{$pages->title}}
        </h1>
        <p class="text-lg">
            {{$pages->content}}
        </p>
    </div>

    
    
   
    @include('components.footer')
</div>