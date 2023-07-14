<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    public function register(Request $request){
        // Xử lý ảnh
        $generatedImageName = 'avatar'.time().'-'.$request->name.'.'.$request->avatar->extension();
        $request->avatar->move(public_path('img/avatars'), $generatedImageName);
        // thêm vào db 
        $user = DB::table('users')->where('email', $request->email)->first();
        if(!$user){
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email =  $request->email;
            $newUser->password =  $request->password;
            $newUser->phone =  $request->phone;
            $newUser->avatar =  $generatedImageName;
            $newUser->role =  'USR';
            $newUser->status =  1;
            $newUser->save();
            return redirect('/')->with('success', 'Đăng ký thành công');
        }else{
            return redirect('/')->with('warning', 'Tài khoản đã tồn tại');
        }
    }

    public function login(Request $request){
        $remember = $request->remember;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)){
            if(Auth::user()->status != 1) {
                return redirect()->route('/')->with('danger', 'Tài khoản đã bị khóa');
            }if(Auth::user()->role === 'ADM') {
                return view('backend.admin');
            }else{
                return redirect('/')->with('info', 'Đăng nhập thành công');
            }
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Bạn đã đăng xuất');
    }
}
