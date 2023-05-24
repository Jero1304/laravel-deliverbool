@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach ($orders as $order)
            <p>{{ $order->date }}</p>
            <p>{{ $order->address }}</p>
            <p>{{ $order->total_price }}</p>
        @endforeach
    </div>
@endsection