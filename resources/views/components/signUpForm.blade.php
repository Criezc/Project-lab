<div class="container w-full mx-auto p-8">

    <div class="flex flex-col justify-center items-center w-full">
        <div class="flex justify-center text-white text-3xl font-bold">
            Hello, Welcome back to &nbsp;
            <span class="text-red-500 font-bold">
                Movie<span class="text-white">List</span>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center max-w-lg mx-auto mt-10">
        <form action="" class="flex flex-col justify-center w-full space-y-5">
            <div
                class="flex justify-center w-full text-white px-5 py-3 rounded-xl bg-primaryBlack focus-within:ring-1 ring-red-600">
                <label for="" class="w-1/2">Username</label>
                <input type="text" name="username" class="w-full outline-none border-none bg-transparent"
                    placeholder="Enter your username" />
            </div>

            <div
                class="flex justify-center w-full text-white px-5 py-3 rounded-xl bg-primaryBlack focus-within:ring-1 ring-red-600">
                <label for="" class="w-1/2">Email</label>
                <input type="email" name="email" class="w-full outline-none border-none bg-transparent "
                    placeholder="Enter your email" />
            </div>
            <div
                class="flex justify-center w-full text-white px-5 py-3 rounded-xl bg-primaryBlack focus-within:ring-1 ring-red-600">
                <label for="" class="w-1/2">Password</label>
                <input type="password" name="password" class="w-full outline-none border-none bg-transparent"
                    placeholder="Enter your password" />
            </div>
            <div
                class="flex justify-center w-full text-white px-5 py-3 rounded-xl bg-primaryBlack focus-within:ring-1 ring-red-600">
                <label for="" class="w-1/2">Password</label>
                <input type="password" name="confirmPassword" class="w-full outline-none border-none bg-transparent"
                    placeholder="Enter your confirm password" />
            </div>


            <div class="flex justify-center w-full flex-col items-center space-y-5">

                <button type="submit"
                    class="text-white bg-red-600 w-full px-5 py-1 rounded-xl  hover:-translate-y-1 transition duration-150 ease-in cursor-pointer flex justify-center items-center ">
                    Register
                    <x-maki-arrow class="ml-1 w-4 text-white inline-flex" />
                </button>


                <div class="inline-flex items-center space-x-2">
                    <span class="text-white text-lg font-semibold">
                        Already have an account?
                    </span>
                    <a href="/login"
                        class="text-red-600 no-underline hover:-translate-y-1 transition duration-150 ease-in cursor-pointer font-semibold">
                        Login now!
                    </a>
                </div>

            </div>
        </form>
    </div>

</div>
