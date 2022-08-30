@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="bg-blue-50 min-h-screen flex items-center">
        <div class="w-full">
            @if($setting)
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
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                            Select category
                        </label>
                        <select id="category" name="category" required
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option disabled>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error!</span>
                                {{ $errors->first('category') }}
                            </p>
                        @endif
                    </div>


                    <div class="mb-5">
                        <label for="complaint" class="block mb-2 font-bold text-gray-600">Complain</label>
                        <textarea name="description" id="complaint" class="border border-gray-300 shadow p-3 w-full rounded mb-"
                            placeholder="What is your complain?" rows="3"></textarea>
                        @if ($errors->has('description'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Error!</span>
                                {{ $errors->first('description') }}
                            </p>
                        @endif
                    </div>


                    <button type="submit"
                        class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
                </form>
            </div>
            @else
                <h2 class="text-center text-green-600 text-xl uppercase mb-10">
                    Fill out your <a href="{{ route('user.setting') }}" class="font-semibold text-gray-900 underline dark:text-white decoration-blue-500" >settings</a> before you can make a complain
                </h2>
            @endif
        </div>
    </div>

    @include('include.footer')
@endsection
