@extends('Layout.app')

@section('scripts')
    <title>
        Actors Page
    </title>
@endsection

@section('content')
    <div class="top flex flex-row justify-between items-center">
        <div class="title">
            <h1 class="text-3xl text-red-500 font-bold">Actors</h1>
        </div>
        <div class="actions flex flex-row w-1/3 justify-between items-center">
            <div class="searchbar w-2/3 mr-2">
                <input class="bg-gray-800 w-full px-4 py-2 rounded-lg" type="text" placeholder="Search Actor Address">
            </div>
            {{-- @if (Auth::user()->role() == 1) --}}
            <div class="add-actor w-1/3">
                <button class="bg-red-500 w-full text-white px-2 py-2 rounded-sm">Add Actor</button>
            </div>
            {{-- @endif --}}
        </div>
    </div>
    <div class="content">

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                        acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                    acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

    </div>
@endsection
