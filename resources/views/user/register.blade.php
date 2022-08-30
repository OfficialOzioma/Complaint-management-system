@extends('layouts.app')

@section('content')
    <section class="h-screen">


        <div class="px-6 h-full text-gray-800">

            <div class="flex xl:justify-center lg:justify-between justify-center items-center flex-wrap h-full g-6">

                <div class="grow-0 shrink-1 md:shrink-0 basis-auto xl:w-6/12 lg:w-6/12 md:w-9/12 mb-12 md:mb-0">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="w-full" alt="Sample image" />
                </div>
                <div class="xl:ml-20 xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0">
                    @include('messages.flash-message')
                    <form action="{{ route('signup') }}" method="post">
                        {{ csrf_field() }}
                        <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5">
                            <p class="text-center font-semibold mx-4 mb-0">Register</p>
                        </div>
                        <!-- Name input -->

                        <div class="relative z-0 w-full mb-6 group">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Enter your full name
                            </label>
                            <input type="text" id="name" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter fullname" value="{{ old('name') }}" required>

                            @if ($errors->has('name'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('name') }}
                                </p>
                            @endif

                        </div>


                        <!-- Email input -->

                        <div class="relative z-0 w-full mb-6 group">

                            <label for="reg_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                School registration Number
                            </label>
                            <input type="text" id="reg_no" name="reg_no"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your school registration Number" value="{{ old('reg_no') }}" required>

                            @if ($errors->has('reg_no'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('reg_no') }}
                                </p>
                            @endif
                        </div>

                        <!-- Password input -->
                        <div class="relative z-0 w-full mb-6 group">

                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Enter your password" required>

                            @if ($errors->has('password'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('password') }}
                                </p>
                            @endif
                        </div>

                        {{-- password-confirmation input --}}
                        <div class="relative z-0 w-full mb-6 group">

                            <label for="confirm_password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Confirm password</label>
                            <input type="password" id="confirm_password" name="password_confirmation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Confirm your password" required>

                            @if ($errors->has('password_confirmation'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('password_confirmation') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex justify-between items-center mb-6">
                            <div class="form-group form-check">
                                <input type="checkbox"
                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                    id="terms" name="terms" required />
                                <label class="form-check-label inline-block text-gray-800" for="exampleCheck2">
                                    I agree to the terms and conditions
                                </label>
                                @if ($errors->has('terms'))
                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                            class="font-medium">Error!</span>
                                        {{ $errors->first('terms') }}
                                    </p>
                                @endif
                            </div>

                        </div>

                        <div class="text-center lg:text-left">
                            <button type="submit"
                                class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                                Register
                            </button>
                            <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                                I already have an account?
                                <a href="/login"
                                    class="text-green-600 hover:text-blue-700 focus:text-blue-700 transition duration-200 ease-in-out">Login</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
