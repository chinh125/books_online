<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(user $users){
        $tieu_de = "User";
        $user = $users::all();
        return view('user.index',compact('user','tieu_de'));
    }

    public function add(UserRequest $userRequest){
        $userRequest->merge(['password'=> Hash::make($userRequest->password)]);
        if($userRequest->isMethod('POST')){
            $params = $userRequest->except('_token');
            $user = user::create($params);
            if($user->id){
                Session::flash('success','Thêm thành công');
            }
        }
        return view('user.add');
    }

    public function edit(UserRequest $userRequest,$id){
        $user = DB::table('user')->where('id',$id)->first();
        if($userRequest->isMethod('POST')){
            $params = $userRequest->except('_token');
            $results = user::where('id',$id)->update($params);
            if($results){
                Session::flash('success','Sửa thành công');
                return redirect()->route('list-user');
            }
        }
        return view('user.edit',compact('user'));
    }

    public function delete(UserRequest $request,$id){
        $users = user::where('id',$id)->delete();
        if($users){
            Session::flash('success','Xóa thành công');
            return redirect()->route('list-user');
        }
    }
}
