<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function fromLogin()
    {
        return view('admin.login.login');
    }

    public function postLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Không được bỏ trống email',
            'email.email' => 'Nhập đúng định dạng email',
            'password.required' => 'Không được bỏ trống password'
        ]);

        if (Auth::attempt([
            'email' => $req->email,
            'password' => $req->password,
        ])) {
            if (Auth::user()->role == '1') {
                return redirect()->route('home.home');
            }else{
                return redirect()->route('fromLogin')->with([
                    'err' => 'Đăng nhập với tài khoản admin'
                ]);
            }
        }else{
            return redirect()->route('fromLogin')->with([
                'err' => 'Bạn không có quyền truy cập'
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect() -> route('fromLogin') -> with([
            'err' => 'Đăng xuất thành công'
        ]);
    }
}
