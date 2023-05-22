@extends('layouts.app')
@section('content')

<div class="container py-5">

    <form action="{{route('restaurants.update',$restaurant)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome ristorante</label>
            <input type="text" class="form-control @error('restaurant_name') is-invalid @enderror" value="{{old('restaurant_name', $restaurant['restaurant_name'])}}"  id="exampleFormControlInput1" name="restaurant_name">
                @error('restaurant_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Indirizzo</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{old('address', $restaurant['address'])}}"  id="exampleFormControlInput1" name="address">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Partita IVA</label>
            <input type="text" class="form-control @error('vat') is-invalid @enderror" value="{{old('vat', $restaurant['vat'])}}" id="exampleFormControlInput1" name="vat">
                @error('vat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
    @foreach($types as $key => $type)
        <div class="form-check">
            <input name="types[]" @checked(in_array($type->id, old('types', $restaurant->types->pluck('id')->all() ))) class="form-check-input" type="checkbox" value="{{ $type->id }}" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            {{ $type->name }}
            </label>
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary">Salva</button>

    </form>
    
</div>
    @endsection