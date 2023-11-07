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

    public function category_book($slug){
        $categories = category::where('category_name',$slug)->get();
        // $cate_book = book::where('cate_id',$detail_book->cate_id)->get();
        return view('layout.category', compact('categories'));
    }
}