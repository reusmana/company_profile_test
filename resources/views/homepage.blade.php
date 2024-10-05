@extends('layout')
@section('content')
@include('components.navbar')
<section id="hero" class="flex flex-col w-full h-[80vh] overflow-hidden relative ">
    <img src="{{ asset('assets/paper1.jpg')}}" alt="" class=" object-cover h-full w-full absolute inset-0">
    <div class=" bg-slate-900/50 relative h-full inset-0 flex flex-col justify-center gap-5 lg:gap-20 px-10 lg:py-0 py-24">
        <h1 class="lg:text-8xl text-5xl font-bold  text-white max-w-screen-lg">We Are Leader in 
            <span class="text-blue-900 bg-blue-300 max-w-screen-lg">Interior Planning</span>
        </h1>
        <p class="lg:text-2xl text-lg  text-white">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi exercitationem eos ab molestiae minima velit excepturi, dignissimos nostrum cum at!</p>
    </div>
</section>
@include('components.ourservice')
@include('components.footer')
@endsection