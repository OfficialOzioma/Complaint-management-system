@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class=" text-center font-sans font-bold text-4xl mt-10">
        <label>
            <h1>
                List of complains
            </h1>
        </label>
    </div>
    @include('messages.flash-message')
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
                    <div class="px-6 pt-4 pb-2">
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                        <span
                            class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
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

        <!--Card 2-->
        {{-- <div class="rounded overflow-hidden shadow-lg">

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">River</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#summer</span>
            </div>
        </div> --}}

        <!--Card 3-->
        {{-- <div class="rounded overflow-hidden shadow-lg">

            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">Forest</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, Nonea! Maiores et
                    perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
            <div class="px-6 pt-4 pb-2">
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#fall</span>
            </div>
        </div> --}}
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
