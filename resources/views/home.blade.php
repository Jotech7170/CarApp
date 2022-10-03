@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>

            {{-- <div class="w-full p-6">
                <p class="text-gray-700">
                    You are logged in!
                </p>
            </div> --}}
            <div class="py-12 flex items-center justify-center">
                <div class="flex flex-col justify-around ">
                    <div>
                      
                        <ul class="flex flex-col  sm:flex-row sm:flex-wrap sm:space-x-4 sm:space-y-0">
                            <li>
                                <a href="/cars" class="btn no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Available-Cars">Available-Cars</a>
                            </li>
                            <li>
                                <a href="/cars/create" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase" title="Create-cars">Create-cars</a>
                            </li>
            
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
