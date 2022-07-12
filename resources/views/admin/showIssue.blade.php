@extends('layouts.app')

@section('content')
    @include('include.header')

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                Predefined complain
            </a>
            <p class="text-lg text-gray-600">
                This was created by the admin
            </p>
        </div>
    </header>
    @include('messages.flash-message')
    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        @if (!empty($issue))
            <section class="w-full md:w-2/3 flex flex-col items-center px-3">

                <article class="flex flex-col shadow my-4">

                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                            {{ $issue->category->name }}
                        </a>
                        <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">
                            {{ $issue->title }}
                        </a>
                        <p href="#" class="text-sm pb-8">
                            By <a href="#" class="font-semibold hover:text-gray-800">Admin</a>,
                            Published on
                            {{ $issue->created_at->format('d M, Y') }}
                        </p>

                        <p class="pb-3">
                            {!! $issue->issue !!}
                        </p>
                    </div>
                </article>


            </section>
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
