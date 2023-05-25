@extends('layouts.app')
@section('content')
    <div class="container">

    @forelse($products->order()->get() as $order )
        <span class="badge rounded-pill text-bg-light">{{ $order->date }}</span>
    @empty
    -
    @endforelse


        @foreach ($orders as $order)
            <p>Data ordine: {{ $order->date }}</p>
            <p>Indirizzo: {{ $order->address }}</p>
            <p>Prezzo: {{ $order->total_price }}</p>
        @endforeach
    </div>
@endsection