@extends('layouts.app')
@section('content')

<div class="container py-5">

    <form action="{{route('restaurants.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome ristorante</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci un nome valido (solo lettere)" required class="form-control @error('restaurant_name') is-invalid @enderror" value="{{old('restaurant_name')}}"  id="exampleFormControlInput1" name="restaurant_name">
                @error('restaurant_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Indirizzo</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci un indirizzo" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}"  id="exampleFormControlInput1" name="address" required>
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Partita IVA</label>
            <input type="text" pattern="[0-9]{11}" title="Inserisci una partita IVA valida (11 numeri)" required class="form-control @error('vat') is-invalid @enderror" value="{{old('vat')}}" id="exampleFormControlInput1" name="vat">
                @error('vat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
    @foreach($types as $key => $type)
        <div class="form-check">
            <input name="types[]" @checked( in_array($type->id, old('types',[]) ) ) class="form-check-input" type="checkbox" value="{{ $type->id }}" id="flexCheckDefault" required>
            <label class="form-check-label" for="flexCheckDefault">
            {{ $type->name }}
            </label>
        </div>
    @endforeach

    <button type="submit" class="btn btn-primary">Crea</button>

    </form>
    
</div>
    @endsection