@extends('template.template')
@section('content')
<div class="container text-center mt-5 border rounded bg-dark text-white">
    <h3 class="mb-5 mt-5">Creation du type de pokemons</h3>
    <div class="container mb-5">
    <form action="/add-type" method="post">
    @csrf
    <input type="text" name="nom" placeholder="Nom du type" value="{{old('nom')}}">
    <button type="submit">Add</button>
</form>
</div>
</div>


@endsection