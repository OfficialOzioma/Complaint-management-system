@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="content-center m-10 ">
        <form class=" m-10">
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">

                </label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">All categories <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg></button>
                <div id="dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                    style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                        </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                        placeholder="Search Complain ..." required>
                    <button type="submit"
                        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                            class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg></button>
                </div>
            </div>
        </form>
    </div>
    @include('messages.flash-message')
    @if (isset($issues) && $issues->count() > 0)
        <div class="p-10 m-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            <!--Card 1-->
            @foreach ($issues as $issue)
                <div class="rounded overflow-hidden shadow-lg">

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $issue->title }}</div>
                        <p class="text-gray-700 text-base">
                            <hr />
                            {!! Str::limit($issue->issue, 150, '...') !!}
                            @if (strlen($issue->issue) > 150)
                                <a href="{{ route('admin.issues.show', $issue->id) }}">
                                    <span
                                        class="bg-green-100 text-green-800 text-md font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                        Read more
                                    </span>
                                </a>
                            @endif
                        </p>
                    </div>

                </div>
            @endforeach

        </div>
    @endif
    <br />
    <hr />
    <div class="p-10 m-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
        <!--Card 1-->
        @if (count($complains) > 0)
            @foreach ($complains as $complain)
                <div class="rounded overflow-hidden shadow-lg">

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $complain->title }}</div>
                        <p class="text-gray-700 text-base">
                            <hr />
                            {!! Str::limit($complain->description, 100, '...') !!}
                            @if (strlen($complain->description) > 100)
                                <a href="{{ route('complaint.show', $complain->id) }}">
                                    <span
                                        class="bg-green-100 text-green-800 text-md font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                        Read more
                                    </span>
                                </a>
                            @endif
                        </p>
                    </div>

                </div>
            @endforeach
        @else
            <div class="rounded overflow-hidden shadow-lg">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">You don't</div>
                    <p class="text-gray-700 text-base">
                        any Complaints yet.
                    </p>
                </div>
            </div>
        @endif


    </div>


    {{-- <div class="container mt-4 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div
                class="card m-2 cursor-pointer border border-gray-400 rounded-lg hover:shadow-md hover:border-opacity-0 transform hover:-translate-y-1 transition-all duration-200">
                <div class="m-3">
                    <h2 class="text-lg mb-2">Title
                        <span
                            class="text-sm text-teal-800 font-mono bg-teal-100 inline rounded-full px-2 align-top float-right animate-pulse">Tag</span>
                    </h2>
                    <p class="font-light font-mono text-sm text-gray-700 hover:text-gray-900 transition-all duration-200">
                        Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission:
                        to explore strange new worlds.</p>
                </div>
            </div>
        </div>
    </div> --}}




    <!-- Footer Section -->
    @include('include.footer')
@endsection
