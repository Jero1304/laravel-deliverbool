@extends('layouts.app')
@section('content')
<div class="container py-5">
    <p></p>
    <p>{{$restaurant->restaurant_name}}</p>
    <p>{{$restaurant->address}}</p>
    <p>{{$restaurant->vat}}</p>
    @forelse ($restaurant->types as $type)
    <p>{{$type->name}}</p>
    @empty
    @endforelse
</div>

@endsection

