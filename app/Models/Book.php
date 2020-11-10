<?php

namespace App\Models;

use App\Models\Order;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function book_count() {
        $order = Order::where('book_id', $this->id)->first();
        if($order)
            return $order->quantity;
        else 
            return 0;
    }
}
