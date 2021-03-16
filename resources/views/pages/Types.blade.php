@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
   <div class="mb-3 mt-3">
      @foreach($types as $type)
         <h3>
             <a  class="text-white" href="/type/{{$type->id}}">{{$type->nom}}</a><br>
         </h3>
       
        <form action=""></form>
        <form action="/type-delete/{{$type->id}}" method="POST">
        @csrf
        <button class="mb-4"type="submit">delete</button>
    </form>
   @endforeach
</div>
   
</div>
@endsection