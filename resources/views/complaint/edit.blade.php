@extends('layouts.app')

@section('content')
    @include('include.header')

    <div class="bg-blue-200 min-h-screen flex items-center">
        <div class="w-full">
            <h2 class="text-center text-blue-400 font-bold text-2xl uppercase mb-10">Fill out Complaint form</h2>
            <div class="bg-white p-10 rounded-lg shadow md:w-3/4 mx-auto lg:w-1/2">
                <form action="">
                    <div class="mb-5">
                        <label for="name" class="block mb-2 font-bold text-gray-600">Title</label>
                        <input type="text" id="name" name="title" placeholder="Put in your Title here..."
                            class="border border-gray-300 shadow p-3 w-full rounded mb-">
                    </div>

                    <div class="mb-5">
                        <label for="twitter" class="block mb-2 font-bold text-gray-600">Complain</label>
                        <textarea name="complain" id="mytextarea" class="border border-gray-300 shadow p-3 w-full rounded mb-"
                            placeholder="What is your complain?" rows="3"></textarea>
                    </div>

                    <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>

    @include('include.footer')
@endsection
