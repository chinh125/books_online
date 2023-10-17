<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{
    public function index(){
        $tieu_de = "Author";
        $authors = author::all();
        return view('author.index',compact('authors','tieu_de'));
    }

    public function add(Request $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $authors = author::create($params);
            if($authors->id){
                Session::flash('success','Add successfully');
            }
        }
        return view('author.add');
    }

    public function edit(Request $request,$id) {
        $authors = DB::table('authors')->where('id',$id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $author = author::where('id',$id)->update($params);         
            if($author){
                Session::flash('success','Update successfully');
                return redirect()->route('list-author');
            }   
        }
        return view('author.edit',compact("authors"));
    }

    public function delete($id){
        $author = author::where('id',$id)->delete();
        if($author){
            Session::flash('success','Delete successfully');
            return redirect()->route('list-author');
        }
    }
}
