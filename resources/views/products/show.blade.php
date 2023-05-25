@extends('layouts.app')
@section('content')
<div class="container py-5">
    <figure>
        <img src="" alt="image">
    </figure>
    <p>Nome prodotto: {{$product->name}}</p>
    <p>Ingredienti: {{$product->ingredient}}</p>
    <p>Prezzo &euro;{{$product->price}}</p>
    <div class="d-flex">
    <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Modifica</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Elimina">
    </form>
</div>
</div>

@endsection