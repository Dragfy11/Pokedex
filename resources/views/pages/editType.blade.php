@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
   <div class="mb-5 mt-5">
      <h2>Modification type</h2>
      <form action="update-type/{{$type->id}}" method="post">
   @csrf
   <input type="text" name="nom" value="{{$type->nom}}">
   <button type="submit">Update</button>
</form>
   </div>
   
</div>
@endsection