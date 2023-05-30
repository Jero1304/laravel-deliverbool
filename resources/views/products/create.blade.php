@extends('layouts.app')
@section('content')

<div class="container py-5">
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine prodotto</label>
            <input type="file" accept="image/*" required class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb')}}"  id="thumb" name="thumb">
                @error('thumb')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome piatto</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci un nome valido (solo lettere)" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}"  id="exampleFormControlInput1" name="name" required>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ingredienti</label>
            <input type="text" pattern="[A-Za-z ]+" title="Inserisci testo valido (solo lettere separate da spazio)" class="form-control @error('ingredient') is-invalid @enderror" value="{{old('ingredient')}}"  id="exampleFormControlInput1" name="ingredient" required>
                @error('ingredient')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
            <input type="text" pattern="^\d+(\.\d{1,2})?" title="Inserisci un prezzo valido (es. 10.99)" required class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="exampleFormControlInput1" name="price">
                @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input @error('visible') is-invalid @enderror" value="{{old('visible')}}" id="exampleFormControlInput1" name="visible" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked required title="seleziona il campo">
            <label class="form-check-label mb-5" for="flexSwitchCheckChecked">Visibile</label>
            @error('visible')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            {{-- aggiungere validazione del check --}}
        </div>

    <button type="submit" class="btn btn-primary">Crea</button>

    </form>
    
</div>

@endsection