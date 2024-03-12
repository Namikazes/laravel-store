<?php

namespace App\Http\Controllers\Bascket;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function index()
    {
        $orderId = session('orderId');
        if(!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('bascket', compact('order'));
    }

    public function add($product)
    {
        $orderId = session('orderId');
        if(is_null($orderId)) {
            $order = Order::create()->id;
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        $order->products()->attach($product);

        return view('bascket', compact('order'));
    }
}
