<!-- component -->
@extends('layouts.app')

@section('content')
    @include('include.header')

    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none md:text-5xl xl:text-6xl dark:text-white">
                    Welcome to Complaints Management system
                </h1>
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">From
                    A system for students to make their complains</p>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ route('login') }}"
                    class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                    Login
                </a>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="w-full"
                    alt="Sample image" />
            </div>

        </div>
    </section>

    <section class="bg-gray-50 dark:bg-gray-800">
{{--        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">--}}
{{--            <div class="max-w-screen-md mb-8 lg:mb-16">--}}
{{--                <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">How to Use</h2>--}}
{{--                <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where--}}
{{--                    technology, innovation, and capital can unlock long-term value and drive economic growth.</p>--}}
{{--            </div>--}}
{{--            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">--}}
{{--                <div>--}}
{{--                    <div--}}
{{--                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">--}}
{{--                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"--}}
{{--                                clip-rule="evenodd"></path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <h3 class="mb-2 text-xl font-bold dark:text-white">Marketing</h3>--}}
{{--                    <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly--}}
{{--                        with all the organization and hit your marketing goals every month with our marketing plan.</p>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div--}}
{{--                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">--}}
{{--                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path--}}
{{--                                d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z">--}}
{{--                            </path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <h3 class="mb-2 text-xl font-bold dark:text-white">Legal</h3>--}}
{{--                    <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant--}}
{{--                        with our structured workflows and custom permissions made for you.</p>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div--}}
{{--                        class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-blue-100 lg:h-12 lg:w-12 dark:bg-blue-900">--}}
{{--                        <svg class="w-5 h-5 text-blue-600 lg:w-6 lg:h-6 dark:text-blue-300" fill="currentColor"--}}
{{--                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <path fill-rule="evenodd"--}}
{{--                                d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z"--}}
{{--                                clip-rule="evenodd"></path>--}}
{{--                            <path--}}
{{--                                d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z">--}}
{{--                            </path>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <h3 class="mb-2 text-xl font-bold dark:text-white">Business Automation</h3>--}}
{{--                    <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more.--}}
{{--                        Now power up with hundreds of new templates to help you get started.</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>

    @include('include.footer')
@endsection
