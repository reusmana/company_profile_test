@extends('layout')
@section('content')
@php
    $isLogin = Auth::check();
@endphp
@if ($isLogin)
    @php
        $user = Auth::user();
    @endphp
    <script>window.location = "/";</script>
@endif
<div class="flex justify-center items-center w-full h-[100vh] px-5">
    <div class="login-box flex flex-col gap-10 max-w-[600px] w-full px-10 py-12 rounded-md shadow-xl drop-shadow-xl border border-slate-300">
        <h2 class="text-3xl font-bold text-slate-700 text-center">Login</h2>
        @if ($errors->any())
            <div class="alert alert-error bg-red-200 py-2 px-4 rounded-md">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
            @csrf
            <div class="form-group flex flex-col lg:grid grid-cols-4 gap-2 lg:gap-0 lg:items-center ">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required class="col-span-3 border border-slate-700 p-2 rounded-md">
            </div>
            <div class="form-group flex flex-col lg:grid grid-cols-4 gap-2 lg:gap-0 lg:items-center ">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required class="col-span-3 border border-slate-700 p-2 rounded-md">
            </div>
            <button type="submit" class="btn-login bg-blue-500 w-full py-2 text-xl text-white">Login</button>
        </form>
    </div>

</div>
@endsection