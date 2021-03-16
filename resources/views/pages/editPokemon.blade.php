@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
    <div>
        <form action="/update-pokemon/{{$pokemon->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    <img class="mt-4 mb-4"src="{{asset('images/'.$pokemon->image)}}" style="height: 100px;" alt="image"><br>
    <input class="mb-4"type="text" name="nom" value="{{$pokemon->nom}}"><br>
    <select name="type_id">
        <option value="{{$pokemon->type->id}}">{{$pokemon->type->nom}}</option>
            @foreach($types as $type)
            <option value="{{$type->id}}">{{$type->nom}}</option>
            @endforeach
        </select>
    <input class="mb-4"type="file" name="image" value="{{$pokemon->image}}"><br>
    <input class="mb-4"type="number" name="niveau" value="{{$pokemon->niveau}}">

    <button type="submit">Add</button>
    </form>
    </div>
    
</div>
@endsection