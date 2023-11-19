<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use App\Models\book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){
        $tieu_de = "Category";
        $cate = category::all();
        return view('category.index',compact('cate','tieu_de'));
    }

    public function add(CategoryRequest $request){
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $cate = category::create($params);
            if($cate->id){
                Session::flash('success','Thêm thành công');
            }
        }
            return view('category.add');
    }

    public function edit(CategoryRequest $request, $id){
        $cate = category::where('id',$id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $result = category::where('id',$id)->update($params);
            if($result){
                Session::flash('success','Cập nhật thành công');
                return redirect()->route('list-category');
            }
        }
        return view('category.edit',compact('cate'));
    }

    public function delete(CategoryRequest $request,$id){
        $cate = category::where('id',$id)->delete();
        if($cate){
            Session::flash('success','Xóa thành công');
            return redirect()->route('list-category');
        }
    }

    public function category_book($id,Request $request){
        // $cate = book::
        // join('categories','categories.id','=','books.cate_id')
        // ->where('books.cate_id','=',$id)
        // ->select('categories.category_name','books.title','books.price','books.image','books.cate_id')
        // ->get();
        $detail_book = book::
        join('categories','books.cate_id','=','categories.id')
        ->select('books.*','categories.category_name')
        ->where('books.id',$id)
        ->first();
        $cate_book = book::where('cate_id',$detail_book->cate_id)->get();
        $cates = category::all();
        
        return view('layout.category', compact('cates','cate_book'));
    }
}