<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class BuyController extends Controller
{
    public function buy(){
        $orders = Order::all();

        // dd(count($orders));


        $sum_orders = 0;

        foreach($orders as $order) {
            $sum_orders += ($order->book->price * $order->quantity);
        }

        return view('orders', [
            'orders' => $orders, 
            'sum_orders' => $sum_orders
            ]);
    }

    public function clear() {
        $orders = Order::all();
        foreach($orders as $order) {
            $order->delete();
        }
        return redirect('buy')
            ->with('message', 'Orders removed!');
    }
}
