@extends('layouts.app')
@section('content')
<div class="m-auto w-4/5 py-8">
    <div class="text-center">
         <h1 class="text-4xl uppercase bold">
             Create A Car
         </h1>
    </div>
</div>

<div class="flex justify-center pt-15">
 <form action="/cars" method="POST" enctype="multipart/form-data">
     @csrf
     <div class="block">
        <input type="file" name="image" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " >
         <input type="text" name="name" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " placeholder="Brand Name...">
         <input type="text" name="founded" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " placeholder="Founded...">
         <input type="text" name="description" id="" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400 " placeholder="Description...">
         <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold" type="submit">Submit</button>
     </div>
 </form>
 
</div>
@if ($errors->any())
 <div class="W-4/8 m-auto text-center">
@foreach ($errors->all() as $error)
    <li class="text-red-500 list-none">
{{ $error }}
    </li>
@endforeach
 </div>
     
 @endif
@endsection