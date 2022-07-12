@extends('layouts.app')

@section('content')
    @include('include.header')

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                Complain Page
            </a>
            <p class="text-lg text-gray-600">
                This was created by {{ $complain->user->name }}
            </p>
        </div>
    </header>
    @include('messages.flash-message')
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        @if (!empty($complain))
            <section class="w-full md:w-2/3 flex flex-col items-center px-3">

                <article class="flex flex-col shadow my-4">

                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                            {{ $complain->category->name }}
                        </a>
                        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                            {{ $complain->title }}
                        </a>
                        <p href="#" class="text-sm pb-8">
                            By <a href="#"
                                class="font-semibold hover:text-gray-800">{{ $complain->user->name }}</a>,
                            Published on
                            {{ $complain->created_at->format('d M, Y') }}
                        </p>

                        <p class="pb-3">
                            {!! $complain->description !!}
                        </p>
                    </div>
                </article>
                @if ($complain->resolved == false)
                    @if (auth()->check())
                        @if ($complain->user_id == Auth::user()->id)
                            <div class="flex flex-col items-center justify-center m-2">
                                <div class="inline-flex rounded-md shadow-sm" role="group">
                                    <button type="button"
                                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-l-lg border border-gray-900 hover:bg-gray-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-gray-500 focus:bg-gray-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:bg-gray-700">
                                        <span class="p-1">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </span>
                                        <a href="{{ route('complaint.edit', $complain->id) }}">Edit</a>
                                    </button>
                                    <button type="button" data-modal-toggle="edit-modal"
                                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-green-900 hover:bg-green-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-green-500 focus:bg-green-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-green-700 dark:focus:bg-green-700">
                                        <span class="p-1">
                                            <i class="fa-solid fa-square-check"></i>
                                        </span>
                                        <span>Mark as resolved </span>
                                    </button>
                                    <form action="#" method="POST">

                                        <button type="button" type="submit" data-modal-toggle="delete-modal"
                                            class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-r-md border border-red-900 hover:bg-red-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-red-500 focus:bg-red-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-red-700 dark:focus:bg-red-700">
                                            <span class="p-1">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </span>
                                            Delete
                                        </button>
                                    </form>

                                </div>
                            </div>
                        @endif
                    @endif
                @else
                    <h1>
                        <span
                            class="bg-green-300 text-white-800 text-4xl font-medium m-4 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                            This complain has been resolved.
                        </span>
                    </h1>
                @endif



                <div class="w-full shadow bg-white ">
                    <div class="w-full rounded-xl border">
                        @if (auth('user')->check())
                            <div class="w-full m-2 p-2">
                                <form action="{{ route('comment.store') }}" method="post" class="w-full p-4">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="comment" class="text-lg text-gray-600">Add a comment</label>
                                        <textarea class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1" name="comment"
                                            placeholder="Enter your comment" col="2" rows="5" required></textarea>
                                        @if ($errors->has('comment'))
                                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                                    class="font-medium">Error!</span>
                                                {{ $errors->first('comment') }}
                                            </p>
                                        @endif

                                        <input type="hidden" name="complain_id" value="{{ $complain->id }}">
                                    </div>
                                    <div>
                                        <button class="px-3 py-2 text-sm text-blue-100 bg-blue-600 rounded">
                                            Comment
                                        </button>
                                    </div>
                                </form>
                            </div> <br />
                        @else
                            <div class="w-full p-5">
                                <p class="text-lg text-center">
                                    Please <a href="{{ route('login') }}"
                                        class="font-semibold hover:text-gray-800 text-blue-700">Login</a>
                                    to add a comment.
                            </div>
                        @endif

                        @if (auth('user')->check())
                            @if ($complain->comments->count() > 0)
                                @foreach ($complain->comments as $comment)
                                    <div class="rounded-xl border p-5 mb-5  bg-white">
                                        <div class="flex w-full items-center justify-between border-b pb-3">
                                            <div class="flex items-center space-x-3">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]">
                                                </div>
                                                <div class="text-lg font-bold text-slate-700">{{ $comment->user->name }}
                                                </div>
                                                <span class="text-sm text-gray-600">
                                                    <span
                                                        class="bg-green-100 text-green-800 text-lg font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-green-200 dark:text-green-900">
                                                        @if ($complain->user->id == Auth::user()->id)
                                                            Owner
                                                        @else
                                                            {{ $comment->user_type }}
                                                        @endif
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="flex items-center space-x-8">

                                                <div class="text-xs text-neutral-800">
                                                    {{ $comment->created_at->diffForHumans() }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-6">
                                            <div class="text-sm text-neutral-600">{{ $comment->body }}</div>
                                        </div>

                                        @if ($comment->user->id == Auth::user()->id)
                                            <div class="flex justify-end">
                                                <div class="flex items-center space-x-2">

                                                    <button type="button" type="button"
                                                        data-modal-toggle="deleteComment-modal"
                                                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-transparent rounded-r-md border border-red-900 hover:bg-red-900 hover:text-white focus:z-10 focus:ring-2 focus:ring-red-500 focus:bg-red-900 focus:text-white dark:border-white dark:text-white dark:hover:text-white dark:hover:bg-red-700 dark:focus:bg-red-700">
                                                        <span class="p-1">
                                                            <i class="fa-solid fa-trash-can"></i>
                                                        </span>
                                                        Delete
                                                    </button>
                                                </div>
                                            </div>
                                        @endif
                                        <div>

                                        </div>
                                    </div>
                                    @php
                                        $comment_id = $comment->id;
                                    @endphp
                                @endforeach
                            @else
                                <div class="w-full p-4 text-center">
                                    <p class="text-md">
                                        No comments yet.
                                    </p>
                                </div>
                            @endif
                        @endif

                    </div>

                </div>
            </section>
            @include('modal.modal', [
                'complain_id' => $complain->id,
                'comment_id' => $comment_id ?? null,
            ])
        @else
            <section class="w-full md:w-2/3 flex flex-col items-center px-3">
                not found
            </section>
        @endif


        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio
                    sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#"
                    class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>



        </aside>

    </div>

    <!-- Footer Section -->
    @include('include.footer')
@endsection
