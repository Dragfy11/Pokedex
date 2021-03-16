@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
   <div class="mt-3 mb-3 ml-3 pt-3 pb-3">
      <h3 class="mb-5">Modification type:</h3>
      <form action="update-type/{{$type->id}}" method="post">
   @csrf
   <input type="text" name="nom" value="{{$type->nom}}">
   <button type="submit">Update</button>
</form>
   </div>
   
</div>
@endsection