@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
    
    <div class="mb-5 mt-5">
        <h2 class="mb-5">Creation Pokémon</h2>
        <form action="/add-pokemon" method="POST" enctype="multipart/form-data">
    @csrf
    <input class="mb-3" type="text" name="nom" placeholder="Nom du pokemon" value="{{old('nom')}}"><br>
    <select class="mb-3" name="type_id" value="{{old('type_id')}}"><br>
        <option>Type</option><br
            @foreach($type as $elem)
            <option value="{{$elem->id}}">{{$elem->nom}}</option> 
            @endforeach
        </select>
    <input type="file" name="image" value="{{old('image')}}"><br>
    <input type="number" name="niveau" placeholder="Niveau du pokemon" value="{{old('lastname')}}">
    <button type="submit">Add</button>
    </form>
    </div>
    
</div>
@endsection