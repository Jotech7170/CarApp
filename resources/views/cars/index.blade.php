@extends('layouts.app')
@section('content')
<div class="m-auto w-4/5 py-24">
    <div class="text-center">
         <h1 class="text-5xl uppercase bold">
             Cars
         </h1>
    </div>
    @if (Auth::user())
    <div class="pt-10">
      <a href="/cars/create" class="border-b-2 pb-2 border-solid itallic text-gray-500">Add a new car &rarr;</a>
        </div>
        @else
        <p class="py-10 italic">Please login to Add New Car</p> 
    @endif
 
    <div class="w-5/6 py-10">
        @foreach ($cars as $car)
              <div class="m-auto">
                @if (isset(Auth::user()->id) && Auth::user()->id == $car->user_id)
                     <div class="float-right">
<a href="cars/{{ $car->id }}/edit" class="border-b-2 pb-2 border-solid itallic text-green-500">Edit &rarr;</a>
<form action="/cars/{{ $car->id }}"  class="pt-5~" method="post">
@csrf
@method('delete')
<button class="border-b-2 pb-2 border-solid itallic text-red-500">delete &rarr;</button>
</form>
                  </div>
                @endif
               
                  <img src="{{ asset('images/' . $car->image_path) }}" class="w-4/12 mb-8 shadow-xl text-center" alt="">
            <span class="uppercase text-blue-500 font-bold text-xs italic">
            Founded:{{ $car->founded }}
            </span>
            <h2 class="text-gray-700 text-5xl hover:text-gray-500">
              <a href="/cars/{{ $car->id }}">
                {{ $car->name }}
              </a>
            </h2>
            <p class="text-lg text-gray-700 py-6">{{ $car->description }}</p>
            <hr class="mt-4 mb-8">    
        </div> 
        @endforeach
    </div>
</div>
@endsection