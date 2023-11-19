<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\author;
use App\Models\category;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(book $book) {
        $books = $book::
        join('categories','books.cate_id','=','categories.id')
        ->select('books.*','categories.category_name')
        ->orderBy('id','asc')
        ->where('cate_id','=',4)
        ->paginate(5);
        $book_top = book::all()->sortByDesc('rate')->take(10);
        return view('layout.home',compact('books','book_top'));
    }

    public function search_item(){
        if(isset($_GET['search'])){
            $search = $_GET['search'];
            $book = book::where('title','LIKE','%'.$search.'%')->get();
            return view('layout.search',compact('search','book'));
        }else{
            return redirect()->to('home');
        }
    }
}
