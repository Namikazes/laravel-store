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
            $order = Order::create();
            $orderId = $order->id;
            session(['orderId' => $orderId]);
        } else {
            $order = Order::find($orderId);
        }

        if($order->products->contains($product)) {
            $pivotRow  = $order->products()->where('product_id', $product)->first()->pivot;
            $pivotRow ->count++;
            $pivotRow ->update();
        } else {
            $order->products()->attach($product);
        }

        return redirect()->route('bascket');

    }

    public function remove($product)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($product)) {
            $pivotRow = $order->products()->where('product_id', $product)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($product);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return redirect()->route('bascket');
    }
}
