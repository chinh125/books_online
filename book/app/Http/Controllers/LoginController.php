<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('login.login');
    }

    public function register(){
        return view('login.register');
    }

    public function postRegister(UserRequest $userRequest){
        $userRequest->merge(['password'=> Hash::make($userRequest->password)]);
        if($userRequest->isMethod('POST')){
            $params = $userRequest->except('_token');
            $user = user::create($params);
            if($user->id){
                // Session::flash('success','Tạo tài khoản thành công');
            }
            return redirect()->route('register')->with('success','Đăng kí thành công');
        }
    }

    public function postLogin(Request $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = DB::table('user')->where('email', $request->email)->first();
            if ($user->role == 0) {
                return redirect()->route('admin');
            } else {
                return redirect()->route('home');
            }
        } else {
            Session::flash('error', 'Thông tin tài khoản hoặc mật khẩu không chính xác');
            return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
