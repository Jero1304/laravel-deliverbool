@extends('layouts.app')
@section('content')

<div class="container py-5">

    <form action="{{route('products.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome piatto</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name', $product['name'])}}"  id="exampleFormControlInput1" name="name">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ingredienti</label>
            <input type="text" class="form-control @error('ingredient') is-invalid @enderror" value="{{old('ingredient', $product['ingredient'])}}"  id="exampleFormControlInput1" name="ingredient">
                @error('ingredient')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price', $product['price'])}}" id="exampleFormControlInput1" name="price">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb', $product['thumb'])}}" id="exampleFormControlInput1" name="thumb">
                @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Visibile</label>
            <input type="text" class="form-control @error('visible') is-invalid @enderror" value="{{old('visible', $product['visible'])}}" id="exampleFormControlInput1" name="visible">
                @error('visible')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

    <button type="submit" class="btn btn-primary">Crea</button>

    </form>
    
</div>
    @endsection