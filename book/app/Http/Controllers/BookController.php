<?php

namespace App\Http\Controllers;

use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(book $book){
        $tieu_de = "Book Table";
        $books = DB::table('books')
        ->join('categories','books.cate_id','=','categories.id')
        ->select('books.*','categories.category_name')
        ->orderBy('id','asc')
        ->paginate(5);
        return view('book.index',compact("books","tieu_de"))->with('i',(request()->input('page',1) -1) *5);
    }

    public function add(Request $request,book $book){
        if($request->isMethod('POST')){
            if($request->hasFile('image') && $request->file('image')){
                $request->image = uploadFile('images',$request->file('image'));
                $params = $request->except('_token');
                $params['image'] = $request->image;
                $books = $book::create($params);
                if($books->id){
                    Session::flash('succcess','Them thanh cong');
                }
            }
        }
        return view('book.add');
    }

    public function edit(Request $request,$id,book $book){
        $books = $book::where('id',$id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $result_book = Storage::delete('/publuc/'.$books->image);
                if($result_book){
                    $request->image = uploadFile('image',$request->file('image'));
                    $params['image'] = $request->image;
                }else{
                    $params['image'] = $books->image;
                }
            }
            $result = $books::where('id',$id)->update($params);
            if($result){
                Session::flash('succcess','Sua thanh cong');
                return redirect()->route('list-book');
            }
        }
        return view('book.edit',compact('books'));
    }

    public function delete($id, book $books){
        $book = $books::where('id',$id)->delete();
        return redirect()->route('list-book');
    }
}