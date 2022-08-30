@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="h-screen w-full bg-white relative flex ">

        <!-- Sidebar -->
        <aside class="h-full w-20 flex flex-col space-y-10 items-center justify-center relative bg-gray-800 text-white">
            <!-- home -->
            <a href="/">
                <div
                    class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                    <span><i class="fa-solid fa-home text-3xl"></i></span>
                </div>
            </a>

            <!-- dashboard -->
            <a href="{{ route('dashboard') }}">
                <div
                    class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                    <span><i class="fa-solid fa-gauge text-3xl"></i></span>
                </div>
            </a>

            <!-- Profile -->
{{--            <div--}}
{{--                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">--}}
{{--                <span><i class="fa-solid fa-user-large text-3xl"></i></span>--}}
{{--            </div>--}}

            <!-- Complains -->
            <a href="{{ route('complaint.index') }}">
                <div
                    class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                    <span> <i class="fa-solid fa-clipboard-list text-3xl"></i></span>
                </div>
            </a>
            <!-- settings -->
            <a href="{{ route('user.setting') }}">
                <div
                    class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                    <span><i class="fa-solid fa-gear text-3xl"></i></span>
                </div>
            </a>

            <!-- logout -->
            <a href="{{ route('logout') }}">
                <div
                    class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                    <span><i class="fa-solid fa-right-from-bracket text-3xl"></i></span>
                </div>
            </a>
        </aside>



        <div class="w-full h-full flex flex-col justify-between">
            <!-- Header -->
            <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-gray-800">
                <!-- Informação -->
                <div class="flex flex-shrink-0 items-center space-x-4 text-white">

                    <!-- Texto -->
                    <div class="flex flex-col items-end ">
                        <!-- Nome -->
                        <div class="text-md font-medium ">{{ auth()->user()->name }}</div>
                        <!-- Título -->
                        <div class="text-sm font-regular">User</div>
                    </div>

                    <!-- Foto -->
                    <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div>
                </div>
            </header>
            @include('messages.flash-message')
            <!-- Main -->
            <main class="max-w-full h-full flex relative overflow-y-hidden">
                <!-- Container -->
                <div
                    class="h-full w-full m-4 flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 overflow-y-scroll">
                    <!-- Container -->
                    <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-red-500">
                        <div class="px-5 pb-5">
                            <div class="flex items-center mt-2.5 mb-5">
                                <i class="fa-solid fa-clipboard-list text-9xl ml-32 items-center text-white"></i>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5 ml-12">

                                <a href="{{ route('complaint.create') }}"
                                    class="text-white text-lg font-medium hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300  rounded-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <h2> Add new complain</h2>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-green-600">
                        <div class="px-5 pb-5">
                            <div class="flex items-center mt-2.5 mb-5">
                                <i class="fa-solid fa-clipboard-check text-9xl ml-32 items-center text-white"></i>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5 ml-12">

                                <a href="{{ route('complaint.resolved') }}"
                                    class="text-white hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-900">
                                    <h2>View Resolved Complains</h2>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-yellow-600 ">
                        <div class="px-5 pb-5">
                            <div class="flex items-center mt-2.5 mb-5">
                                <i class="fa-solid fas fa-clipboard-question text-9xl ml-32 items-center text-white"></i>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5 ml-12">

                                <a href="{{ route('complaint.unresolved') }}"
                                    class="text-white hover:text-white border border-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-yellow-500 dark:text-yellow-500 dark:hover:text-white dark:hover:bg-yellow-600 dark:focus:ring-yellow-900">
                                    <h2> View Unresolve Complain</h2>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-gray-400">
                        <div class="px-5 pb-5">
                            <div class="flex items-center mt-2.5 mb-5">
                                <i class="fa-solid fas fa-clipboard-user text-9xl ml-32 items-center text-white"></i>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5 ml-12">

                                <a href="#"
                                    class="text-white hover:text-white border border-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-gray-500 dark:text-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-900">
                                    <h2> View Predefined complain</h2>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto  flex-grow bg-gray-400">
                        <span class="text-center text-3xl m-1 font-bold text-white dark:text-white">
                            <h3>

                                Activity Logs
                            </h3>
                        </span>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            S/N
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Type
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Last Activity
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            action
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($complaints) > 0)
                                        @php $num = 1 @endphp
                                        @foreach ($complaints as $complaint)
                                            @if ($complaint->activities->count() > 0)
                                                @foreach ($complaint->activities as $activity)
                                                    <tr
                                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                            {{ $num++ }}
                                                        </th>
                                                        <td class="px-6 py-4 ">
                                                            <span
                                                                class="bg-green-300 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                                {{ $activity->type }}
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4 ">
                                                            <span
                                                                class="bg-green-300 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                                {{ $activity->description }}
                                                            </span>
                                                        </td>
                                                        <td class="px-6 py-4">
                                                            {{ $activity->created_at->diffForHumans() }}
                                                        </td>

                                                        <td class="px-6 py-4 ">
                                                            <a href="{{ route('complaint.show', $complaint->id) }}"
                                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                                View
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        @endforeach
                                    @else
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4 text-center" colspan="5">
                                                <span class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                    No Complains Found</span>
                                            </td>
                                        </tr>
                                    @endif






                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="w-96 h-auto rounded-lg flex-shrink-0 flex-grow bg-green-600 mb-24">
                        <span class="text-center text-3xl m-1 font-bold text-white dark:text-white">
                            <h3>
                                <i class="fa-solid  fa-clipboard-check text-1xl ml-32  text-white"></i>
                                Resolved Complains
                            </h3>
                        </span>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="p-4">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search for items">
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Complain Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Resolved
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            No. of Comments
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($complaints) > 0)
                                        @foreach ($complaints as $complain)
                                            @if ($complain->resolved == true)
                                                <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                        {{ Str::limit($complain->title, 30, '...') }}
                                                    </th>
                                                    <td class="px-6 py-4 text-center">

                                                        <span
                                                            class="bg-green-300 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                            {{ $complain->resolved ? 'Yes' : 'No' }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        {{ $complain->comments->count() }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center">
                                                        {{ $complain->created_at->diffForHumans() }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center">
                                                        <a href="{{ route('complaint.show', $complain->id) }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @else
                                                {{-- <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <td class="px-6 py-4 text-center" colspan="5">
                                                        <span class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                            No Resolved Complains Found</span>
                                                    </td>
                                                </tr> --}}
                                            @endif
                                        @endforeach
                                    @else
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4 text-center" colspan="5">
                                                <span class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                    No Complains Found</span>
                                            </td>
                                        </tr>
                                    @endif



                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-96 h-auto rounded-lg flex-shrink-0 flex-grow bg-yellow-600 mb-24">

                        <span class="text-center text-3xl m-1 font-bold text-white dark:text-white">
                            <h3>
                                <i class="fa-solid fas fa-clipboard-question text-1xl ml-32  text-white"></i>
                                Unresolved Complains
                            </h3>
                        </span>
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="p-4">
                                <label for="table-search" class="sr-only">Search</label>
                                <div class="relative mt-1">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input type="text" id="table-search"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Search for items">
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Complain Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Resolved
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            No. of Comments
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            date
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($complaints) > 0)
                                        @foreach ($complaints as $complain)
                                            @if ($complain->resolved == false)
                                                <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                                                    <th scope="row"
                                                        class="px-6 py-4 text-left font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                                        {{ Str::limit($complain->title, 30, ' ...') }}
                                                    </th>
                                                    <td class="px-6 py-4 text-center">

                                                        <span
                                                            class="bg-yellow-300 text-yellow-800 text-md font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-yellow-200 dark:text-yellow-900">
                                                            {{ $complain->resolved ? 'Yes' : 'No' }}
                                                        </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-center">
                                                        {{ $complain->comments->count() }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center">
                                                        {{ $complain->created_at->diffForHumans() }}
                                                    </td>
                                                    <td class="px-6 py-4 text-center">
                                                        <a href="{{ route('complaint.show', $complain->id) }}"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                            View
                                                        </a>
                                                    </td>
                                                </tr>
                                            @else
                                                {{-- <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <td class="px-6 py-4 text-center" colspan="5">
                                                        <span
                                                            class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                            No unresolved Complains Found</span>
                                                    </td>
                                                </tr> --}}
                                            @endif
                                        @endforeach
                                    @else
                                        <tr
                                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                            <td class="px-6 py-4 text-center" colspan="5">
                                                <span class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                    No Complains Found</span>
                                            </td>
                                        </tr>
                                    @endif



                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>
        </div>

    </div>
@endsection
