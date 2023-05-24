@extends('layouts.app')
@section('content')
<div class="container py-5">
    <p>{{$product->name}}</p>
    <p>{{$product->ingredient}}</p>
    <p>{{$product->price}}</p>
</div>

@endsection