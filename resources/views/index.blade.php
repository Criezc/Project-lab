@extends('Layout.app')

@section('scripts')
    <title>
        MovieList
    </title>
    <style>
        .text-ellipsis--3 {
            display: -webkit-box !important;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            white-space: normal;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
@endsection

@section('content')
    <x-home-carousel>
        <div class="carousel-inner relative w-full overflow-hidden h-80v">
            @foreach ($random as $key => $rand)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }} relative float-left w-full">
                    <img src="{{ asset('/images/movies/background/' . $rand->background_url) }}" class="block w-full"
                        alt="{{ $rand->title }}" />
                    <div class="carousel-caption md:block absolute top-[25vh] left-[15vw] w-1/3">
                        <p>{{ $rand->genres[0]->genre->name }} | {{ date('Y', strtotime($rand->release_date)) }}</p>
                        <h1 class="text-5xl font-medium py-2">{{ $rand->title }}</h1>
                        <p class="text-ellipsis overflow-hidden text-ellipsis--3">{{ $rand->description }}</p>
                        @if (Auth::check() && Auth::user()->nonAdmin())
                            @if ($flags[$loop->index] == true)
                                <form action="{{ route('addWatchlist', $rand) }}" method="post">
                                    @csrf
                                    <button type="submit"
                                        class="rounded bg-red-500 text-white flex justify-end items-end px-4 py-2 my-2">
                                        <x-eos-add class="w-5 hover:scale-150 transition duration-75 ease-linear" /> Add To
                                        Watchlist
                                    </button>
                                </form>
                            @else
                                <button type="submit" class="text-red-500 bg-white rounded px-4 py-2 my-2 flex">
                                    Added to watchlist
                                    <x-eos-done class="w-5 transition duration-75 ease-linear" />
                                </button>
                            @endif
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </x-home-carousel>
    <div class="px-8 py-5">
        <div class="container w-full mx-auto min-h-[100px]:">
            <div class="flex justify-start items-center space-x-4">
                <x-icomoon-fire class="w-5 text-white" />
                <h1 class="text-white font-semibold text-2xl">
                    Popular
                </h1>
            </div>
            <hr class="mt-2 py-2 border-gray-800" />
            <div class="grid grid-cols-5 mx-auto gap-5 w-full">
                @foreach ($famous as $movie)
                    <x-large-movie-card :id="$movie->id" :title="$movie->title" :imgUrl="$movie->img_url" :releaseDate="$movie->release_date" />
                @endforeach

            </div>

            <div class="flex items-center justify-between space-x-4 mt-10">
                <div class="flex justify-start items-center space-x-4 ">
                    <x-icomoon-film class="w-5 text-white" />
                    <h1 class="text-white font-semibold text-2xl">
                        Show
                    </h1>
                </div>

                <div class="s flex justify-end">
                    <form action="{{ route('searchMovie') }}" method="GET" role="search"
                        class="w-full items-center p-0 m-0">
                        <input class="bg-gray-800 w-full px-4 py-2 items-center rounded-lg text-white" name="q"
                            type="text" placeholder="Search Movie......">
                        <input type="submit" hidden />
                    </form>
                </div>

            </div>
            <hr class="mt-2 py-2 border-gray-800" />

            <div class="w-full">
                <div class="flex flex-row w-full mx-auto container justify-between overflow-scroll gap-2">
                    @foreach ($genres as $genre)
                        <div
                            class="mb-4 cursor-pointer rounded-full bg-primaryBlack text-white px-14 py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
                            <a
                                href="{{ request()->fullUrlWithQuery(['g' => $genre->id]) }}
                                ">{{ $genre->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="my-10 w-full">
                <x-sortBy />
            </div>

            @if (Auth::check() && Auth::user()->isAdmin())
                <div class="w-full flex justify-end items-end">
                    <a href="/addMovie"
                        class="inline-flex items-center bg-red-500 px-5 py-2 rounded-lg hover:-translate-y-2 duration-100 transition ease-out text-white font-semibold">
                        <x-eos-add class="w-4" />
                        Add Movie
                    </a>
                </div>
            @endif

            <div class="grid grid-cols-5 mt-5 gap-3">
                @foreach ($movies as $movie)
                    <div
                        class="flex justify-center flex-col  container w-[250px] cursor-pointer hover:-translate-y-2 transition duration-300 ease-linear">
                        <div class="flex justify-center">
                            <a href="{{ route('movie', $movie) }}">
                                <img src="{{ asset('/images/movies/image/' . $movie->img_url) }}"
                                    alt="{{ $movie->title }}"
                                    class="w-full rounded-md h-[400px] object-center object-cover" />
                            </a>
                        </div>
                        <div class="flex justify-between items-start flex-col">
                            <div class="flex justify-start flex-col">
                                <h1 class="font-semibold text-white">
                                    {{ $movie->title }}
                                </h1>
                            </div>
                            <div class="flex justify-between w-full">
                                <h2 class="font-semibold text-gray-500">
                                    {{ date('d-m-Y', strtotime($movie->release_date)) }}
                                </h2>

                                @if (Auth::check() && Auth::user()->nonAdmin())
                                    @if ($flags[$loop->index] == true)
                                        <form action="{{ route('addWatchlist', $movie) }}" method="post">
                                            @csrf
                                            <button type="submit" class=" text-gray-500 flex justify-end items-end ">
                                                <x-eos-add class="w-5 hover:scale-150 transition duration-75 ease-linear" />
                                            </button>
                                        </form>
                                    @else
                                        <button type="submit" class="text-red-500">
                                            <x-eos-done class="w-5 hover:scale-150 transition duration-75 ease-linear" />
                                        </button>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection

@section('js-scripts')
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
        @if (Session::has('warning'))
            toastr.success("{{ Session::get('warning') }}")
        @endif
    </script>
