<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class DetailController extends Controller
{
    public function index($id){
        $detail_book = book::
        join('categories','books.cate_id','=','categories.id')
        ->select('books.*','categories.category_name')
        ->where('books.id',$id)
        ->first();
        $cate_book = book::where('cate_id',$detail_book->cate_id)->get();
        return view('layout.detail',compact('detail_book','cate_book'));
    }
}
