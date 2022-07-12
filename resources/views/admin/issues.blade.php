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
                        <button type="button" data-modal-toggle="add-issues-modal"
                            class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300  font-medium rounded-lg text-base px-6 py-3.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <span>Add New Issue</span>
                        </button>

                        @include('messages.flash-message')
                        <div
                            class="p-10 m-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">

                            <!--Card 1-->
                            @if (count($issues) > 0)
                                @foreach ($issues as $issue)
                                    <div class="rounded overflow-hidden shadow-lg">

                                        <div class="px-6 py-4">
                                            <div class="font-bold text-xl mb-2">{{ $issue->title }}</div>
                                            <p class="text-gray-700 text-base">
                                                <hr />
                                                {!! Str::limit($issue->issue, 100, '...') !!}
                                                @if (strlen($issue->issue) > 100)
                                                    <a href="{{ route('admin.issues.show', $issue->id) }}">
                                                        <span
                                                            class="bg-green-100 text-green-800 text-md font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                            Read more
                                                        </span>
                                                    </a>
                                                @endif
                                            </p>
                                        </div>

                                        <div class="px-6 pt-4 pb-2">
                                            <button type="button"
                                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                                                Edit
                                            </button>
                                            <button type="button"
                                                data-modal-toggle="delete-issues-modal-{{ $issue->id }}"
                                                class="inline-block bg-red-200 rounded-full px-3 py-1 text-sm font-semibold text-red-700 mr-2 mb-2">
                                                Delete
                                            </button>
                                        </div>


                                    </div>

                                    @include('modal.modal', [
                                        'includeTiny' => true,
                                        'issue_id' => $issue->id,
                                    ])
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
                            @include('modal.modal', [
                                'includeTiny' => true,
                            ])

                        </div>
                    </div>
                </main>

                @include('include.footer')
            </div>
        @endsection
