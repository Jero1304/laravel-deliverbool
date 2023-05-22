@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="py-5">
        <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
    </div>
    <ul>
        @foreach ($restaurants as $restaurant)
        <li>
            <a href="{{route('restaurants.show', $restaurant)}}">{{$restaurant->restaurant_name}}</a> 
            <a href="{{route('restaurants.edit',$restaurant)}}">Modifica</a>
            <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
            </form>
        </li>

        @endforeach
    </ul>
</div>

@endsection

