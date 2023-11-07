<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\author;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(book $book) {
        $books = $book::
        join('categories','books.cate_id','=','categories.id')
        ->select('books.*','categories.category_name')
        ->get();
        $book_top = book::all()->sortByDesc('rate')->take(10);
        return view('layout.home',compact('books','book_top'));
    }
}
