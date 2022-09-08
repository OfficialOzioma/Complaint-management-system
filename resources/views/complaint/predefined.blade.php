@extends('layouts.app')

@section('content')
    @include('include.header')


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
    @else
        <div class="text-center text-xl uppercase mb-60 mt-52">
            <h2> No Predefined complaint</h2>
        </div>
    @endif

    <!-- Footer Section -->
    @include('include.footer')
@endsection
