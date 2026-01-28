<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view(view: 'sinhvien.register');
    }

    public function store(Request $request)
        {
            // 1. Lấy dữ liệu người dùng nhập
            $username = $request->input('username');
            $password = $request->input('password');
            $repass   = $request->input('repass');
            $mssv     = $request->input('mssv');
            // 2. Kiểm tra dữ liệu người dùng nhập
            if ($username == 'vuductam' && 
                $password == '123' && 
                $mssv == '0190967' && 
                $password == $repass) {
                
                // Nếu ĐÚNG hết thì trả về view thành công
                return view('sinhvien.register_success', [
                    'username' => $username
                ]);
            }

            // 3. Nếu SAI bất kỳ cái nào (sai tên, sai pass, sai mssv, hoặc repass không khớp)
            return "Đăng ký thất bại"; 
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

    public function storeAge(Request $request)
        {
            // 1. Lấy dữ liệu từ form
            $tuoi = $request->input('age');

            // 2. Lưu vào Session
            $request->session()->put('tuoi_da_luu', $tuoi);

            // 3. Quay lại trang cũ và thông báo
            return redirect()->back()->with('success', 'Đã lưu tuổi thành công!');
        }
}
