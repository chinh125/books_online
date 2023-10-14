<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\promocode;
use Illuminate\Support\Facades\Session;

class PromocodeController extends Controller
{
    public function index()
    {
        $promo_code = promocode::all();
        return view('promocode.index',compact('promo_code'));
    }

    public function add(Request $request)
    {
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $promocodes = promocode::create($params);
            if($promocodes->id){
                Session::flash('success','Add successfully');
            }
        }
        return view('promocode.add');
    }

    public function edit(Request $request, $id)
    {
        $promocodes = promocode::where('id',$id)->first();
        if($request->isMethod('POST')){
            $params = $request->except('_token');
            $promocode = promocode::where('id',$id)->update($params);         
            if($promocode){
                Session::flash('success','Update successfully');
                return redirect()->route('list-promo-code');
            }   
        }
        return view('promocode.edit',compact("promocodes"));
    }

    public function delete($id)
    {
        $promo_code = promocode::where('id',$id)->delete();
        if($promo_code){
            Session::flash('success','Delete successfully');
            return redirect()->route('list-promo-code');
        }
    }
}
