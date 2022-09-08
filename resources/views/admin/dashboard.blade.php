@extends('layouts.app')

@section('content')
    <!-- component  -->
    <!-- This is an example component -->
    <div>
        @include('include.admin_navbar')
        <div class="flex overflow-hidden bg-white pt-16">
            @include('include.sidebar', [
                'complains' => $complains->count(),
            ])
            <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
            <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
                <main>
                    <div class="pt-6 px-4">
                        <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                            {{ $complains->count() }}
                                        </span>
                                        <h3 class="text-base font-normal text-gray-500">
                                            <span> All Complaints </span>
                                        </h3>
                                    </div>

                                </div>
                                <span class="float-right">
                                    <a href="{{ route('complaint.index') }}"
                                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        view </a>
                                </span>
                            </div>
                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                            {{ $resolved }}
                                        </span>
                                        <h3 class="text-base font-normal text-gray-500">Resolved Complaints</h3>
                                    </div>

                                </div>
                                <span class="float-right">
                                    <a href="{{ route('complaint.resolved') }}"
                                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        view </a>
                                </span>
                            </div>
                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0">
                                        <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">
                                            {{ $unresolved }}
                                        </span>
                                        <h3 class="text-base font-normal text-gray-500">Unresolve Complaints</h3>
                                    </div>

                                </div>
                                <span class="float-right">
                                    <a href="{{ route('complaint.unresolved') }}"
                                        class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                        view </a>
                                </span>
                            </div>
                            {{-- <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 "> --}}
                            {{-- <div class="flex items-center"> --}}
                            {{-- <div class="flex-shrink-0"> --}}
                            {{-- <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900"> --}}
                            {{-- {{ $users }} --}}
                            {{-- </span> --}}
                            {{-- <h3 class="text-base font-normal text-gray-500">Users</h3> --}}
                            {{-- </div> --}}
                            {{-- </div> --}}
                            {{-- </div> --}}
                        </div>
                        <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Resolved Complaints</h3>
                                <div class="block w-full overflow-x-auto">
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr>
                                                <th style="width:70%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Title
                                                </th>
                                                <th style="width:25%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Date</th>
                                                <th style="width:5%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-100">
                                            @if ($complains->count() > 0)
                                                @foreach ($complains as $complain)
                                                    @if ($complain->resolved == true)
                                                        <tr class="text-gray-500">
                                                            <th
                                                                class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                                                {{ Str::limit($complain->title, 30, '...') }}
                                                            </th>
                                                            <td
                                                                class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                                                {{ $complain->created_at->diffForHumans() }}
                                                            </td>
                                                            <td
                                                                class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                                <div class="flex items-center">
                                                                    <a href="{{ route('complaint.show', $complain->id) }}">
                                                                        <span
                                                                            class="mr-2 text-sm font-medium text-green-700">View</span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <td class="px-6 py-4 text-center" colspan="5">
                                                        <span class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                            No Complaints Found</span>
                                                    </td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                                <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Unresolved Complaints</h3>
                                <div class="block w-full overflow-x-auto">
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr>
                                                <th style="width:70%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Title
                                                </th>
                                                <th style="width:25%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Date</th>
                                                <th style="width:5%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-100">
                                            @if ($complains->count() > 0)
                                                @foreach ($complains as $complain)
                                                    @if ($complain->resolved == false)
                                                        <tr class="text-gray-500">
                                                            <th
                                                                class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">
                                                                {{ Str::limit($complain->title, 50, '...') }}
                                                            </th>
                                                            <td
                                                                class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">
                                                                {{ $complain->created_at->diffForHumans() }}
                                                            </td>
                                                            <td
                                                                class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                                                <div class="flex items-center">
                                                                    <a href="{{ route('complaint.show', $complain->id) }}">
                                                                        <span
                                                                            class="mr-2 text-sm font-medium text-green-700">View</span>
                                                                    </a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            @else
                                                <tr
                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                    <td class="px-6 py-4 text-center" colspan="5">
                                                        <span class="text-center text-2xl text-gray-600 dark:text-gray-400">
                                                            No Complaints Found</span>
                                                    </td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                @include('include.footer')
            </div>
        @endsection
