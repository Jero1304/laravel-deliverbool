@extends('layouts.app')
@section('content')

<div class="container py-5">

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome piatto</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"  id="exampleFormControlInput1" name="name">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ingredienti</label>
            <input type="text" class="form-control @error('ingredient') is-invalid @enderror" value="{{old('ingredient')}}"  id="exampleFormControlInput1" name="ingredient">
                @error('ingredient')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="exampleFormControlInput1" name="price">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

    <button type="submit" class="btn btn-primary">Crea</button>

    </form>
    
</div>
    @endsection