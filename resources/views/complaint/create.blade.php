@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="bg-blue-50 min-h-screen flex items-center">
        <div class="w-full">
            <h2 class="text-center text-green-600 font-bold text-2xl uppercase mb-10">Fill out Complaint form</h2>
            <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
                @include('messages.flash-message')
                <form action="{{ route('complaint.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-5">
                        <label for="title" class="block mb-2 font-bold text-gray-600">Title</label>
                        <input type="text" id="title" name="title" placeholder="Put in your Title here..."
                            maxlength="100" class="border border-gray-300 shadow p-3 w-full rounded mb-" required>
                        @if ($errors->has('title'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error!</span>
                                {{ $errors->first('title') }}
                            </p>
                        @endif
                    </div>

                    <div class="mb-5">
                        <label for="complaint" class="block mb-2 font-bold text-gray-600">Complain</label>
                        <textarea name="description" id="complaint" class="border border-gray-300 shadow p-3 w-full rounded mb-"
                            placeholder="What is your complain?" rows="3"></textarea>
                        @if ($errors->has('complain'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error!</span>
                                {{ $errors->first('complain') }}
                            </p>
                        @endif
                    </div>


                    <button type="submit"
                        class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
