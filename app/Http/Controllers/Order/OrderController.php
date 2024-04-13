<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orderId = session('orderId');

        if(is_null($orderId)) {
            return redirect()->route('index');
        }

        $order = Order::find($orderId);

        return view('order', compact('order'));
    }

    public function confirm(Request $request)
    {
        $orderId = session('orderId');

        if(is_null($orderId)) {
            return redirect()->route('index');
        }

        $order = Order::find($orderId);
        $result = $order->saveOrder($request->name, $request->phone);


        return redirect()->route('index');
    }
}
