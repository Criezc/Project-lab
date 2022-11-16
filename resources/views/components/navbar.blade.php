<div class="bg-primaryBlack">
    {{-- navbar --}}

    <nav class="w-full container mx-auto p-8 flex flex-row justify-between items-center">

        <div class="w-full">
            <h1 class="text-3xl text-red-500 font-bold">
                Movie<span class="text-white">List</span>
            </h1>
        </div>

        <div class="w-full flex justify-end">
            <ul class="text-white flex flex-row space-x-5 justify-center items-center">
                <li>
                    <a href="/" class="text-white hover:underline">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/movies" class="text-white hover:underline">
                        Movies
                    </a>
                </li>

                @if (Auth::check() && Auth::user()->isAdmin())
                    <li>
                        <a href="/actors" class="text-white hover:underline">Actors</a>
                    </li>
                @endif

                @if (Auth::guest())
                    <a href="/register">
                        <button class="navButton bg-blue-600 border-none text-white">
                            Register
                        </button>
                    </a>
                    <a href="/login">
                        <button class="navButton">
                            Login
                        </button>
                    </a>
                @endif
                @if (Auth::check())
                    <a href="/">
                        <button class="px-3 py-2 text-white hover:underline">
                            My Watchlist
                        </button>
                    </a>
                    <div class="group inline-block relative">
                        <button class=" text-gray-500 font-semibold py-2 px-4 rounded inline-flex items-center">
                            <x-heroicon-s-user-circle class="w-7" />
                        </button>
                        <ul
                            class="absolute hidden text-gray-700 pt-1 group-hover:block bg-white rounded-md w-[150px] right-0
                            ">
                            <li>
                                <a class="hover:text-gray-800 py-2 px-4 block whitespace-no-wrap transition duration-100
                                    ease-in-out"
                                    href="/profile">Profile</a>
                            </li>
                            <li class="px-4">
                                <hr class="border-gray-300 border-[1px]" />
                            </li>
                            <li>
                                <a href="/logout"
                                    class="px-4 py-2 hover:text-red-600 inline-flex items-center transition duration-100 ease-in-out w-full">
                                    Logout
                                    <x-eos-logout class="w-4 ml-2 600 text-gray-500 items-center" />

                                </a>
                            </li>
                        </ul>
                    </div>
        </div>
        @endif
        </ul>
</div>

</nav>

</div>
