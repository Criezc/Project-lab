@extends('Layout.app')

@section('scripts')
    <title>
        MovieList | Profile
    </title>
@endsection

@section('content')
    <div class="container w-full mx-auto p-10">
        <div class="flex justify-center items-center">
            <h1 class="text-red-600 font-bold text-4xl">
                Update Profile
            </h1>
        </div>
    </div>

    <div class="container w-full mx-auto ">
        <div class="w-full flex mx-auto">
            <div class="max-w-md w-full flex justify-start flex-col items-center space-y-5">
                <h1 class="text-red-600 font-bold text-3xl ">
                    <span class="text-white">
                        My
                    </span>
                    Profile
                </h1>

                <x-heroicon-s-user-circle class="w-[100px] text-white" />

                <div class="flex justify-center">
                    <h1 class="text-white text-2xl">
                        {{ Auth::user()->username }}
                    </h1>
                </div>

                <div class="flex justify-center">
                    <h1 class="text-white text-2xl">
                        {{ Auth::user()->email }}
                    </h1>
                </div>

            </div>

            <div class="w-full justify-center items-center">
                <form action="{{ route('update.profile') }}" method="POST"
                    class="flex justify-center items-center flex-col w-full space-y-7 text-xl font-semibold">
                    @csrf
                    <x-form.inputWrapper>
                        <label class="w-1/2">Username</label>

                        <input type="text" value="{{ Auth::user()->username }}" name="username"
                            class="w-full outline-none
                            border-none bg-transparent" />
                    </x-form.inputWrapper>
                    <x-form.inputWrapper
                        class="flex justify-center w-full text-white px-5 py-3 rounded-sm bg-primaryBlack focus-within:ring-1 ring-red-600">
                        <label class="w-1/2">Email</label>

                        <input type="email" value="{{ Auth::user()->email }}" name="email"
                            class="w-full outline-none
                            border-none bg-transparent" />
                    </x-form.inputWrapper>
                    <x-form.inputWrapper
                        class="flex justify-center w-full text-white px-5 py-3 rounded-sm bg-primaryBlack focus-within:ring-1 ring-red-600">
                        <label class="w-1/2">DOB</label>

                        <input type="date" name="dateOfBirth" value="{{ Auth::user()->dob }}"
                            class="w-full outline-none
                            border-none bg-transparent" />
                    </x-form.inputWrapper>
                    <x-form.inputWrapper
                        class="flex justify-center w-full text-white px-5 py-3 rounded-sm bg-primaryBlack focus-within:ring-1 ring-red-600">
                        <label class="w-1/2">Phone</label>

                        <input type="text" name="phone"
                            class="w-full outline-none
                            border-none bg-transparent"
                            value="{{ Auth::user()->phone }}" />
                    </x-form.inputWrapper>

                    <div
                        class="w-full
                            justify-center items-center text-center bg-red-500 py-2 rounded-sm hover:-translate-y-1
                            transition duration-150 ease-in cursor-pointer">
                        <button type="submit" class="text-white no-underline  font-semibold border-none outline-none">
                            Save Changes
                        </button>
                    </div>
                </form>
                @if (session('success'))
                    <p class="text-green-500 text-xl">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="text-red-500 text-xl">{{ $err }}</p>
                    @endforeach
                @endif
            </div>

        </div>

    </div>
@endsection
