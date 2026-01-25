<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view(view: 'sinhvien.register');
    }

    public function store(Request $request)
    {
        // Xử lý dữ liệu form đăng kí
        $username = $request->input('username');
        $password = $request->input('password');
        
        // Trả về giao diện đăng kí thành công
        return view('sinhvien.register_success', [
            'username' => $username
        ]);
    }
    public function loginInfo(Request $request)
    {
        // Xử lý dữ liệu form đăng nhập
        $username = $request->input('username');
        $password = $request->input('password');

        // Kiểm tra username và password
        if ($username === 'vuductam' && $password === '123') {
            // Đăng nhập thành công
            return view('sinhvien.login_success', [
                'username' => $username
            ]);
        } else {
            // Đăng nhập thất bại
            return redirect()->back()->with('error', 'Tên đăng nhập hoặc mật khẩu không chính xác!');
        }
    }
    public function login(){
        return view('sinhvien.login');
    }
}
