@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
<div class=" mt-3 mb-3 ml-3 pt-3 pb-3 border border-white">
    <h3 class="mb-5">{{$pokemon->id}}</h3>
    <img src="{{asset('images/'.$pokemon->image)}}" style="height: 100px;" alt="image"><br>
    <h3 class="mt-4">Nom : {{$pokemon->nom}}</h3>
    <h3>Type : {{$pokemon->type->nom}}</h3>
    <h3 class="mb-4">Niveau : {{$pokemon->niveau}}</h3>
    <button><a class="text-dark"href="/pokemon-edit/{{$pokemon->id}}">edit</a></button>
    <form  class="mt-3"action="/pokemon-delete/{{$pokemon->id}}" method="POST">
        @csrf
        <button type="submit">delete</button>
    </form>
</div>
</div>
@endsection