<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\view;
use Illuminate\Support\Facades\Session;

class ViewController extends Controller
{
    public function index(){
        $tieu_de = "Table view";
        $views = view::join('books','books.id','=','views.book_id')
        ->select('views.*','books.title')
        ->get();
        return view('view.index',compact('views','tieu_de'));
    }
    // public function add(Request $request){
    //     if($request-> isMethod('POST')){
    //         $params = $request->except('_token');
    //         $views = view::create($params);
    //         if($views->id){
    //             Session::flash('success','Successfully');
    //         }
    //     }
    //     return view('view.add');
    // }
    // public function edit(Request $request,$id){
    //     $views = view::where('id',$id)->first();
    //     if($request-> isMethod('POST')){
    //         $params = $request->except('_token');
    //         $results = view::create($params);
    //         if($results){
    //             Session::flash('success','Successfully');
    //         }
    //     }
    //     return view('view.edit',compact('views'));
    // }
    public function delete($id){
        $views = view::where('id',$id)->delete();
        if($views){
            Session::flash('success','Successfully');
        }
    }
}
