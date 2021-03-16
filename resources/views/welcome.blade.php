@extends('template.template')
@section('content')
@foreach($pokemons as $pokemon)
<div class="mb-5 ml-3">
    <div class="container text-center mt-2 mb-2 pt-5 pb-5 border bg-dark text-white">
        <h2 class="mb-4">{{$pokemon->nom}}</h2>
        <img src="{{asset('images/'.$pokemon->image)}}" style="height: 100px;" alt="image">
        <br><br>
        <button><a class="text-dark"href="/pokemon/{{$pokemon->id}}">Plus d'infos</a></button>
    </div>
</div>
    

@endforeach
@endsection