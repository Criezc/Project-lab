<div class="container w-full mx-auto p-8">

    <div class="flex flex-col justify-center items-center w-full">
        <div class="flex justify-center text-white text-3xl font-bold">
            Hello, Welcome back to &nbsp;
            <span class="text-red-500 font-bold">
                Movie<span class="text-white">List</span>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center max-w-lg mx-auto mt-10">
        @if ($errors->any())
            @foreach ($errors->all() as $err)
                <p class="text-red-600 text-2xl">{{ $err }}</p>
            @endforeach
        @endif
        <form action="{{ route('postLogin') }}" method="POST" class="flex flex-col justify-center w-full space-y-5">
            @csrf
            <div
                class="flex justify-center w-full text-white px-5 py-3 rounded-xl bg-primaryBlack focus-within:ring-1 ring-red-600">
                <label class="w-1/2">Email</label>
                <input type="email" name="email" class="w-full outline-none border-none bg-transparent "
                    placeholder="Enter your email"
                    value="{{ Cookie::get('cookie_email') ? Cookie::get('cookie_email') : '' }}" />
            </div>
            <div
                class="flex justify-center w-full text-white px-5 py-3 rounded-xl bg-primaryBlack focus-within:ring-1 ring-red-600">
                <label class="w-1/2">Password</label>
                <input type="password" name="password" class="w-full outline-none border-none bg-transparent"
                    placeholder="Enter your password"
                    value="{{ Cookie::get('cookie_pass') ? Cookie::get('cookie_pass') : '' }}" />
            </div>
            <div class="inline-flex space-x-2">
                <input type="checkbox" name="remember_token" value="1" id="remember" />
                <label class="text-white">Remember me</label>
            </div>

            <div class="flex justify-center w-full flex-col items-center space-y-5">
                <button type="submit" class="buttonBase">
                    Login
                    <x-maki-arrow class="ml-1 w-4 text-white flex justify-center items-center" />
                </button>

                <div class="inline-flex items-center space-x-2">

                    <span class="text-white text-lg font-semibold">
                        Don't have an account
                    </span>
                    <a href=""
                        class="text-red-600 no-underline hover:-translate-y-1 transition duration-150 ease-in cursor-pointer font-semibold">
                        Register now!
                    </a>
                </div>

            </div>
        </form>
    </div>

</div>

<script>
    @if (Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
    @elseif (Session::has('error'))
        toastr.error("{{ Session::get('error') }}")
    @endif
</script>
