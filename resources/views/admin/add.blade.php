@extends('layout')
@section('content')
<div class="flex  overflow-x-clip ">
 @include('components.sidebar')
 <div class="flex flex-col w-full py-5">
    @include('components.buttonsidebar')
    <div class="flex flex-col mx-2">
        <form action="{{ route('store') }}" method="POST" class="px-10 py-6" >
            @csrf
            <label for="title" class="flex flex-col text-2xl text-slate-700 gap-3">
                <span class="text-3xl font-semibold">Title</span>
                <input type="text" name="title" id="title"  required class="border border-slate-700 p-2 rounded-md">
            </label>
            <label for="content" class="flex flex-col text-2xl text-slate-700 gap-3 mt-5">
                <span class="text-3xl font-semibold">Content</span>
                <textarea type="text" name="content" id="content"  required class="border border-slate-700 p-2 rounded-md h-32">
                </textarea>
            </label>
            <button class="px-5 py-3 bg-blue-500 text-white rounded-md mt-5 lg:w-fit w-full">
                Submit
            </button>
        </form>

    </div>
 </div>
</div>
@endsection