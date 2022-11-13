@extends('Layout.app')

@section('scripts')
    <title>
        MovieList
    </title>
@endsection

@section('content')
    <div class="container w-full mx-auto min-h-[100px]:">
        <div class="flex justify-start items-center space-x-4">
            <x-icomoon-fire class="w-5 text-white" />
            <h1 class="text-white font-semibold text-2xl">
                Popular
            </h1>
        </div>
        <hr class="mt-2 py-2 border-gray-800" />
        <div class="grid grid-cols-4 mx-auto gap-5 w-full">

            <x-card.largeCard />
            <x-card.largeCard />
            <x-card.largeCard />
            <x-card.largeCard />

        </div>

        <div class="flex items-center justify-between space-x-4 mt-10">
            <div class="flex justify-start items-center space-x-4 ">
                <x-heroicon-o-film class="w-5 text-white" />
                <h1 class="text-white font-semibold text-2xl">
                    Show
                </h1>
            </div>

            <div class="s flex justify-end">
                <input type="text" name="searchBar" id=""
                    class="outline-none border-none rounded-lg w-[300px] text-white px-3 bg-primaryBlack py-3"
                    placeholder="Search movie...">
            </div>

        </div>
        <hr class="mt-2 py-2 border-gray-800" />

        <div class="w-full">

            <x-categoryBar />
        </div>

        <div class="my-10 w-full">
            <x-sortBy />
        </div>

        @if (Auth::check() && Auth::user()->isAdmin())
            <div class="w-full flex justify-end items-end">
                <a href=""
                    class="inline-flex items-center bg-red-500 px-5 py-2 rounded-lg hover:-translate-y-2 duration-100 transition ease-out text-white font-semibold">
                    <x-eos-add class="w-4" />
                    Add Movie
                </a>
            </div>
        @endif





        <div class="grid grid-cols-4 mt-5 gap-1">

            <x-card.smallCard />
            <x-card.smallCard />
            <x-card.smallCard />
            <x-card.smallCard />

        </div>

    </div>
@endsection
