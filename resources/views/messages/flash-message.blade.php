{{-- This is success alert --}}
@if ($message = Session::get('success'))
    <div id="alert-additional-content-3" class="p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200 alert" role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-green-700 dark:text-green-800" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium text-green-700 dark:text-green-800">Success !</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-green-700 dark:text-green-800">
            <strong>{{ $message }}</strong>
        </div>
        <div class="flex">

            <button type="button" data-bs-dismiss="alert" aria-label="Close"
                class="text-green-700 bg-transparent border border-green-700 hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-green-800 dark:text-green-800 dark:hover:text-white"
                data-dismiss-target="#alert-additional-content-3" aria-label="Close">
                Dismiss
            </button>
        </div>
    </div>
@endif

{{-- This is an error alert --}}
@if ($message = Session::get('error'))
    <div id="alert-additional-content-2" class="p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200 alert" role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium text-red-700 dark:text-red-800">Error !</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-red-700 dark:text-red-800">
            <strong>{{ $message }}</strong>
        </div>
        <div class="flex">
            <button type="button" data-bs-dismiss="alert" aria-label="Close"
                class="text-red-700 bg-transparent border border-red-700 hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-red-800 dark:text-red-800 dark:hover:text-white"
                data-dismiss-target="#alert-additional-content-2" aria-label="Close">
                Dismiss
            </button>
        </div>
    </div>
@endif


{{-- This is warning alert --}}
@if ($message = Session::get('warning'))
    <div id="alert-additional-content-4" class="p-4 mb-4 bg-yellow-100 rounded-lg dark:bg-yellow-200 alert"
        role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-yellow-700 dark:text-yellow-800" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium text-yellow-700 dark:text-yellow-800">Warning !</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-yellow-700 dark:text-yellow-800">
            <strong>{{ $message }}</strong>
        </div>
        <div class="flex">

            <button type="button" data-bs-dismiss="alert" aria-label="Close"
                class="text-yellow-700 bg-transparent border border-yellow-700 hover:bg-yellow-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-yellow-800 dark:text-yellow-800 dark:hover:text-white"
                data-dismiss-target="#alert-additional-content-4" aria-label="Close">
                Dismiss
            </button>
        </div>
    </div>
@endif

{{-- This is an info alert --}}
@if ($message = Session::get('info'))
    <div id="alert-additional-content-1" class="p-4 mb-4 bg-blue-100 rounded-lg dark:bg-blue-200 alert" role="alert">
        <div class="flex items-center">
            <svg class="mr-2 w-5 h-5 text-blue-700 dark:text-blue-800" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                    clip-rule="evenodd"></path>
            </svg>
            <h3 class="text-lg font-medium text-blue-700 dark:text-blue-800">Info</h3>
        </div>
        <div class="mt-2 mb-4 text-sm text-blue-700 dark:text-blue-800">
            <strong>{{ $message }}</strong>
        </div>
        <div class="flex">
            <button type="button" data-bs-dismiss="alert" aria-label="Close"
                class="text-blue-700 bg-transparent border border-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-blue-800 dark:text-blue-800 dark:hover:text-white"
                data-dismiss-target="#alert-additional-content-1" aria-label="Close">
                Dismiss
            </button>
        </div>
    </div>
@endif


{{-- @if ($errors->any())
    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif --}}

@if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <div id="alert-additional-content-5"
                    class="alert p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200 alert-dismissible " role="alert">
                    <div class="flex items-center">
                        <svg class="mr-2 w-5 h-5 text-red-700 dark:text-red-800" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-red-700 dark:text-red-800">Error</h3>
                    </div>
                    <div class="mt-2 mb-4 text-sm text-red-700 dark:text-red-800">
                        <li>{{ $error }}</li>
                    </div>
                    <div class="flex">
                        <button type="button" data-bs-dismiss="alert" aria-label="Close"
                            class="text-red-700 bg-transparent border border-red-700 hover:bg-red-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-xs px-3 py-1.5 text-center dark:border-red-800 dark:text-red-800 dark:hover:text-white"
                            data-dismiss-target="#alert-additional-content-5" aria-label="Close">
                            Dismiss
                        </button>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
@endif
