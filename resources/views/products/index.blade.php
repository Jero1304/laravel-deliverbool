@extends('layouts.app')
@section('content')

<div class="container">
    @foreach ($products as $product)
        <a href="{{route('products.show', $product)}}">{{$product->name}}</a>
    @endforeach
</div>

@endsection