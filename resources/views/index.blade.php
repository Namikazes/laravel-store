@extends('master')

@section('title', 'Главная')

@section('content')
    <div class="starter-template">
        <h1>Все товары</h1>
        <div class="row">
            @foreach($products as $product)
                @include('cart', compact('product'))
            @endforeach
        </div>
    </div>

@endsection
