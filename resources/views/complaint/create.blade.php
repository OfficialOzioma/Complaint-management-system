@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="bg-blue-50 min-h-screen flex items-center">
        <div class="w-full">
            @if ($setting)
                <h2 class="text-center text-green-600 font-bold text-2xl uppercase mb-10">Fill out Complaint form</h2>
                <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">

                    @include('messages.flash-message')
                    <form action="{{ route('complaint.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-5">
                            <label for="title" class="block mb-2 font-bold text-gray-600">Title</label>
                            <input type="text" id="title" name="title" placeholder="Put in your Title here..."
                                maxlength="100" class="border border-gray-300 shadow p-3 w-full rounded mb-"
                                value="{{ old('title') }}"required>
                            @if ($errors->has('title'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('title') }}
                                </p>
                            @endif
                        </div>
                        <div class="mb-5">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
                                Select category
                            </label>
                            <select id="category" name="category" required value="{{ old('category') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option disabled>Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('category') }}
                                </p>
                            @endif
                        </div>


                        <div class="mb-5">
                            <label for="complaint" class="block mb-2 font-bold text-gray-600">Complain</label>
                            <textarea name="description" id="complaint" class="border border-gray-300 shadow p-3 w-full rounded mb-"
                                placeholder="What is your complain?" value="{{ old('description') }}" rows="3"></textarea>
                            @if ($errors->has('description'))
                                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span
                                        class="font-medium">Error!</span>
                                    {{ $errors->first('description') }}
                                </p>
                            @endif
                        </div>


                        <button type="submit"
                            class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
                    </form>
                </div>
            @else
                <div class="text-center text-xl uppercase mb-10">
                    <h2> Fill out your
                        <button
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            <a href="{{ route('user.setting') }}">settings</a>
                        </button>
                        before you can make a complain
                    </h2>
                </div>
            @endif
        </div>
    </div>

    @include('include.footer')
@endsection
