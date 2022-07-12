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
                                <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">List of admins</h3>
                                <div class="block w-full overflow-x-auto">
                                    <button type="button" data-modal-toggle="add-admin-modal"
                                        class=" m-5 text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 float-right">
                                        <span>Add New Admin</span>
                                    </button>
                                    @include('messages.flash-message')
                                    <table class="items-center w-full bg-transparent border-collapse">
                                        <thead>
                                            <tr>
                                                <th style="width:30%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Fullname
                                                </th>
                                                <th style="width:30%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Email address</th>
                                                <th style="width:30%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">
                                                    Role</th>
                                                <th style="width:10%"
                                                    class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-100">
                                            @if ($admins->count() > 0)
                                                @foreach ($admins as $admin)
                                                    <tr class="text-gray-900">
                                                        <th
                                                            class="border-t-0 px-4 align-middle text-lg font-normal whitespace-nowrap p-4 text-left">
                                                            {{ $admin->name }}
                                                        </th>
                                                        <td
                                                            class="border-t-0 px-4 align-middle text-lg font-medium text-gray-900 whitespace-nowrap p-4">
                                                            {{ $admin->email }}
                                                        </td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                                            {{ $admin->role ?? 'Admin' }}
                                                        </td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle text-lg whitespace-nowrap p-4">
                                                            <div class="flex items-center">
                                                                <button
                                                                    data-modal-toggle="delete-admin-modal-{{ $admin->id }}">
                                                                    <span
                                                                        class="mr-2 text-lg font-medium text-red-700">Delete</span>
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    @include('modal.modal')
                                                @endforeach
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
