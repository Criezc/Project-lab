<div class="flex justify-center flex-col  container w-[250px]">
    <div class="flex justify-center">
        <img src="https://lumiere-a.akamaihd.net/v1/images/encanto-id-poster_b0f0a082.jpeg?region=0%2C0%2C600%2C900"
            alt="Encanto" class="w-full rounded-md">
    </div>
    <div class="flex justify-between items-start flex-col">
        <div class="flex justify-start flex-col">
            <h1 class="font-semibold text-white">
                Encanto
            </h1>
        </div>
        <div class="flex justify-between w-full">
            <h2 class="font-semibold text-gray-500">
                2021
            </h2>
            @if (Auth::check() && Auth::user()->nonAdmin())
                <a href="" class="text-gray-500 flex justify-end items-end ">
                    <x-eos-add class="w-5 hover:scale-150 transition duration-75 ease-linear" />
                </a>
            @endif
        </div>
    </div>
</div>
