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
                <main class=" w-full">
                    <div class="pt-6 px-4 w-full">
                        <div class=" w-full">
                            <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 w-full">
                                <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">List of Categories</h3>
                                <div class="block w-full overflow-x-auto">

                                    <button type="button" data-modal-toggle="add-category-modal"
                                        class=" m-5 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-right">
                                        <span>Add New Category</span>
                                    </button>

                                    @include('messages.flash-message')
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr>
                                                <th style="width:10%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    S/N
                                                </th>
                                                <th style="width:80%"
                                                    class="px-4 bg-gray-50 text-center text-gray-700 align-middle py-3 text-xs font-semibold uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Name</th>

                                                <th style="width:10%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-100">
                                            @php $id = 1; @endphp
                                            @if ($categories->count() > 0)
                                                @foreach ($categories as $category)
                                                    <tr class="text-gray-900">
                                                        <th
                                                            class="border-t-0 px-4 align-middle text-lg font-normal whitespace-nowrap p-4 text-left">
                                                            {{ $id++ }}
                                                        </th>
                                                        <td
                                                            class="border-t-0 px-4 text-center align-middle text-lg font-medium text-gray-900 whitespace-nowrap p-4">
                                                            {{ $category->name }}
                                                        </td>

                                                        <td
                                                            class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                                                <button type="button"
                                                                    data-modal-toggle="edit-category-modal-{{ $category->id }}"
                                                                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-l-lg border border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-blue-500 focus:bg-blue-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-blue-700 dark:focus:bg-blue-700">
                                                                    <i class="fa-solid fa-pencil-alt"></i>
                                                                    Edit
                                                                </button>

                                                                <button type="button"
                                                                    data-modal-toggle="delete-category-modal-{{ $category->id }}"
                                                                    class="py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-r-md border border-red-900 hover:bg-red-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-red-500 focus:bg-red-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-red-700 dark:focus:bg-red-700">
                                                                    <i class="fa-solid fa-trash-alt"></i>
                                                                    Delete
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    @include('modal.modal', [
                                                        'category_id' => $category->id,
                                                        'category_name' => $category->name,
                                                    ])
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="3" class="text-center">
                                                        <h3 class="text-gray-900">No category found</h3>
                                                    </td>
                                                </tr>
                                            @endif
                                            @include('modal.modal')
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
