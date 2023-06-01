@extends('layouts.app')
@section('content')
    <div class="container text-center">
        @if ($restaurants->isEmpty())
            <div class=" container py-3">
                <a class="btn btn-primary" href="{{route('restaurants.create')}}">Aggiungi ristorante</a>
            </div>
        @else

        
        @foreach ($restaurants as $restaurant)
        <h3 class="py-5">{{$restaurant->restaurant_name}}</h3>
        <div class="d-flex justify-content-end pt-5 pb-4">
            <a class="btn btn-primary btn-sm" href="{{route('products.create')}}">Aggiungi piatti</a>
        </div>
        <div class="container-fluid d-flex justify-content-center flex-wrap gap-5 py-4">


        @foreach ($restaurant->products as $product)  

            <div class="card" style="width: 18rem;">
                <div class="box-image">
                    <img src="{{ asset('storage/'.$product->thumb ) }}" width="100%" alt="">
                </div>
                
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('products.show', $product) }}">{{ $product->name }}</a>
                    </h5>
                    <p class="card-text text-overflow">Ingredienti: {{$product->ingredient}}</p>
                    <p class="card-text text-overflow">Prezzo: {{$product->price}}</p>
                    <div class="d-flex justify-content-center gap-2 button-edit-delete">
                        <a class="btn btn-primary btn-sm" href="{{route('products.edit',$product)}}">Modifica</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-primary btn-sm" type="submit" value="Elimina">
                        </form>
                    </div>
                </div>
            
        </div>
        @endforeach  
        <div>
            <p>Indirizzo: {{$restaurant->address}}</p>
            <p>Partita IVA: {{$restaurant->vat}}</p>
        </div>
        @endforeach


        @endif
    </div>


@endsection

