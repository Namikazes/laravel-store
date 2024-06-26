@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{route('products', [$product->category, $product->code])}}">
                                <img height="56px" src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg">
                                {{$product->name}}
                            </a>
                        </td>
                        <td><span class="badge">{{ $product->pivot->count }}</span>
                            <div class="btn-group form-inline">
                                <form action="{{route('bascket-remove', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-danger"><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                                <form action="{{route('bascket-add', $product)}}" method="POST">
                                <button type="submit" class="btn btn-success"><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->getPrice($product->pivot->count)}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{ $order->getCalculateTotalPrice() }} руб.</td>
                </tr>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{ route('order') }}">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection
