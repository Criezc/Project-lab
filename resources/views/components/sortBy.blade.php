<div class="flex flex-row w-full mx-auto container space-x-5">
    <h1 class="text-white font-semibold">
        Sort By:
    </h1>

    <div
        class="cursor-pointer rounded-full bg-primaryBlack text-white px-8 py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
        <a href="{{ request()->fullUrlWithQuery(['s' => 0]) }}
            ">Latest</a>
    </div>

    <div
        class="cursor-pointer rounded-full bg-primaryBlack text-white px-8 py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
        <a href="{{ request()->fullUrlWithQuery(['s' => 1]) }}
            ">A-Z</a>
    </div>

    <div
        class="cursor-pointer rounded-full bg-primaryBlack text-white px-8 py-1 hover:-translate-y-1 transition duration-100 ease-in-out">
        <a href="{{ request()->fullUrlWithQuery(['s' => 2]) }}
            ">Z-A</a>
    </div>
</div>
