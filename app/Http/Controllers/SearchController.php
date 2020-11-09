<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

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
}
