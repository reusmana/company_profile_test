@extends('layout')
@section('content')
<div class="flex  overflow-x-clip ">
 @include('components.sidebar')
 <div class="flex flex-col w-full py-5">
    @include('components.buttonsidebar')
    <div class="flex flex-col mx-2">
        <div class="px-10 py-6 overflow-x-scroll" >
            <table class=" table-fixed w-full">
                <thead >
                    <tr class="border border-slate-700">
                        <th class="w-20">
                            Title
                        </th>
                        <th class="w-60">
                            Content
                        </th>
                        <th class="w-20 lg:w-10">
                            Visitor
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pages as $page)
                        <tr class="border border-slate-700">
                            <td class="border border-slate-700  h-20 px-5">
                                {{ $page->title }}
                            </td>
                            <td class="border border-slate-700  h-20 px-5">
                                {{ $page->content }}
                                Content
                            </td>
                            <td class="border border-slate-700  h-20 px-5">
                                <span class="px-4 py-1 rounded-md text-white bg-blue-500">
                                    <a href="{{ route('show', $page->id) }}">
                                        {{ $page->visitors }}

                                    </a>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
 </div>
</div>
@endsection