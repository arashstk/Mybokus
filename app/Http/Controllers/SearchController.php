<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;

class SearchController extends Controller
{
    public function index (Request $request) {
        if(isset($request->title) || isset($request->author)) {
            $data['books'] = Book::where('title', 'LIKE', "%" . $request->title . "%")
                ->where('author', 'LIKE', "%" . $request->author . "%")
                ->get();
            $data['author'] = $request->author;
            $data['title'] = $request->title;

            return view('search', $data);
        }
        return view('search');
    }

    public function add ($id){

        $book = Book::find($id);

        $orders = Order::where('book_id', $id)->count();

        if($orders > 0) {
            $order = Order::where('book_id', $id)->first();
            $order->quantity += 1;
            $order->save();
        } else {
            $order = new Order();
            $order->book_id = $id;
            $order->quantity = 1;
            $order->save();
        }

        return back()->with('message', 'Book added to basket.');
    }

    public function remove ($id){

        $book = Book::find($id);

        $orders = Order::where('book_id', $id)->count();

        $order = Order::where('book_id', $id)->first(); 
        if($order->quantity > 1) {
            $order->quantity -= 1;
            $order->save();
        } else
            $order->delete();

        return back()->with('message', 'Book removed to basket.');
    }

}


     