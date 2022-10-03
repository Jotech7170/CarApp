@extends('layouts.app')
@section('content')
<div class="m-auto w-4/8 py-15">
    <div class="text-center">
         <h1 class="text-5xl uppercase bold">
             Edit A Car
         </h1>
    </div>
</div>

<div class="flex justify-center pt-15">
 <form action="/cars/{{ $cars->id }}" method="POST">
     @csrf
     @method('PUT')
     <div class="block">
         <input value="{{ $cars->name }}" type="text" name="name" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " >
         <input value="{{ $cars->founded }}" type="text" name="founded" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " >
         <input value="{{ $cars->description }}" type="text" name="description" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " >
         <button  class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold" type="submit">Submit</button>
     </div>
 </form>
</div>
@endsection