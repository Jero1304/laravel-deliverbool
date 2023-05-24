@extends('layouts.app')
@section('content')
<div class="container py-5">
    <p>{{$product->name}}</p>
    <p>{{$product->ingredient}}</p>
    <p>{{$product->price}}</p>
    <a class="btn btn-primary" href="{{ route('products.edit', $product) }}">Modifica</a>
    <form action="{{ route('products.destroy', $product) }}" method="POST">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
    </form>
</div>

@endsection