@extends('layout')
@section('content')
<div class="flex  overflow-x-clip ">
 @include('components.sidebar')
 <div class="flex flex-col w-full py-5">
    @include('components.buttonsidebar')
    <div class="mx-2">
        <h1 class=" lg:text-8xl text-5xl font-bold">Home Dashboard</h1>

    </div>
 </div>
</div>
@endsection