@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="content-center m-10 ">
        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="simple-search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search" required>
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    @include('messages.flash-message')
    @if (isset($issues) && count($issues) > 0)
        <div class="p-10 m-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            <!--Card 1-->
            @foreach ($issues as $issue)
                <div class="rounded overflow-hidden shadow-lg">

                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $issue->title }}</div>
                        <span class="text-gray-700 text-base">
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
                        </span>
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
                        <span class="text-gray-700 text-base">
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
                        </span>
                        <br />
                        <button
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <a href="{{ route('complaint.show', $complain->id) }}">Open complain</a>
                        </button>
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
