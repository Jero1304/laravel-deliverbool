@extends('layouts.app')
@section('content')
<div class="container py-5">

    <h1 class="fw-bold pb-4">Il tuo ristorante</h1>
    @if ($restaurants->isEmpty())
        <div class="py-5">
            <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
        </div>
    @else
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome Ristorante</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">P.Iva</th>
                <th scope="col">Categoria</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($restaurants as $restaurant)
            <tr>
                <td>
                    <a href="{{route('restaurants.show', $restaurant)}}">{{$restaurant->restaurant_name}}</a>
                </td>
                <td>{{$restaurant->address}}</td>
                <td>{{$restaurant->vat}}</td>
                <td>
                    @forelse ($restaurant->types as $type)
                    <span class="badge rounded-pill text-bg-light">{{$type->name}}</span>
                    @empty
                    @endforelse
                </td>
                <td class="d-flex gap-2">
                    <a class="btn btn-primary btn-sm" href="{{route('restaurants.edit',$restaurant)}}">Modifica</a>
                    <a class="btn btn-secondary btn-sm" href="{{route('orders.index')}}">Ordini</a>
                    <form action="{{ route('restaurants.destroy', $restaurant) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
                    </form>
                </td>    
                
            </tr>
            @endforeach  
            </tbody>
        </table>

        <div class="d-flex justify-content-between align-items-center pt-5 pb-4">
            <h3 class="fw-bold mb-0">Menù</h3>
            <a class="btn btn-light btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nome Piatto</th>
                <th scope="col">Ingredienti</th>
                <th scope="col">Prezzo</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($restaurant->products as $product)
            <tr>
                <td>
                    <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                </td>
                <td>{{ $product->ingredient }}</td>
                <td>{{ $product->price }}</td>
                <td class="d-flex gap-2">
                    <a class="btn btn-primary btn-sm" href="{{route('products.edit',$product)}}">Modifica</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger btn-sm" type="submit" value="Elimina">
                    </form>
                </td>    
            </tr>
            @endforeach  
            </tbody>
        </table>
    @endif

    
    
    
    {{-- <div class="container py-5">
        <img src="{{ asset('storage/'.$product->thumb ) }}" alt="">
    </div> --}}



    
</div>


@endsection

