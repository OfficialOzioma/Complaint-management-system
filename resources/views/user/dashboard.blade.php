@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="h-screen w-full bg-white relative flex ">

        <!-- Sidebar -->
        <aside class="h-full w-20 flex flex-col space-y-10 items-center justify-center relative bg-gray-800 text-white">
            <!-- Courses -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <span><i class="fa-solid fa-gauge text-3xl"></i></span>
            </div>

            <!-- Profile -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <span><i class="fa-solid fa-user-large text-3xl"></i></span>
            </div>

            <!-- Complains -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <span> <i class="fa-solid fa-clipboard-list text-3xl"></i></span>
            </div>

            <!-- settings -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <span><i class="fa-solid fa-gear text-3xl"></i></span>
            </div>

            <!-- logout -->
            <div
                class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
                <span><i class="fa-solid fa-right-from-bracket text-3xl"></i></span>
            </div>
        </aside>



        <div class="w-full h-full flex flex-col justify-between">
            <!-- Header -->
            <header class="h-16 w-full flex items-center relative justify-end px-5 space-x-10 bg-gray-800">
                <!-- Informação -->
                <div class="flex flex-shrink-0 items-center space-x-4 text-white">

                    <!-- Texto -->
                    <div class="flex flex-col items-end ">
                        <!-- Nome -->
                        <div class="text-md font-medium ">Unknow Unknow</div>
                        <!-- Título -->
                        <div class="text-sm font-regular">Student</div>
                    </div>

                    <!-- Foto -->
                    <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div>
                </div>
            </header>

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

                                <a href="#"
                                    class="text-white hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                                    <h2> Add new complain</h2>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-green-500">
                        <div class="px-5 pb-5">
                            <div class="flex items-center mt-2.5 mb-5">
                                <i class="fa-solid fa-clipboard-question text-9xl ml-32 items-center text-white"></i>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5 ml-12">

                                <a href="#"
                                    class="text-white hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-900">
                                    <h2>View Unsolved Complains</h2>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-blue-500">
                        <div class="px-5 pb-5">
                            <div class="flex items-center mt-2.5 mb-5">
                                <i class="fa-solid fas fa-clipboard-check text-9xl ml-32 items-center text-white"></i>
                            </div>
                            <div class="flex items-center mt-2.5 mb-5 ml-12">

                                <a href="#"
                                    class="text-white hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-600 dark:focus:ring-blue-900">
                                    <h2> View Solve Complain</h2>
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
                    <div class="w-96 h-auto rounded-lg flex-shrink-0 flex-grow bg-green-600">
                        <span class="text-center text-3xl font-bold text-white dark:text-white">
                            <h3>Solved Complains</h3>
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
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Product name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Color
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4">
                                            Sliver
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-2" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            Microsoft Surface Pro
                                        </th>
                                        <td class="px-6 py-4">
                                            White
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop PC
                                        </td>
                                        <td class="px-6 py-4">
                                            $1999
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-3" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            Magic Mouse 2
                                        </th>
                                        <td class="px-6 py-4">
                                            Black
                                        </td>
                                        <td class="px-6 py-4">
                                            Accessories
                                        </td>
                                        <td class="px-6 py-4">
                                            $99
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-96 h-auto rounded-lg flex-shrink-0 flex-grow bg-blue-600">
                        <span class="text-center text-3xl font-bold text-white dark:text-white">
                            <h3>Unsolved Complains</h3>
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
                                        <th scope="col" class="p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-all-search" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Product name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Color
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Category
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-1" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            Apple MacBook Pro 17"
                                        </th>
                                        <td class="px-6 py-4">
                                            Sliver
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop
                                        </td>
                                        <td class="px-6 py-4">
                                            $2999
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-2" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            Microsoft Surface Pro
                                        </th>
                                        <td class="px-6 py-4">
                                            White
                                        </td>
                                        <td class="px-6 py-4">
                                            Laptop PC
                                        </td>
                                        <td class="px-6 py-4">
                                            $1999
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input id="checkbox-table-search-3" type="checkbox"
                                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                            </div>
                                        </td>
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                            Magic Mouse 2
                                        </th>
                                        <td class="px-6 py-4">
                                            Black
                                        </td>
                                        <td class="px-6 py-4">
                                            Accessories
                                        </td>
                                        <td class="px-6 py-4">
                                            $99
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <a href="#"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </main>
        </div>

    </div>
@endsection
