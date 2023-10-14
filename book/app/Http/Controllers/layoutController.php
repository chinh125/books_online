<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(book $book) {
        $books = $book::all();
        return view('layout.index',compact('books'));
    }
}
