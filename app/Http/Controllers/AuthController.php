<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function getLogin()
    {

        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        // Lấy dữ liệu email, password người dùng gửi lên
        $email = $request->email;
        $password = $request->password;

        // Kiểm tra thông tin đăng nhập của người dùng
        if (Auth::attempt([
            'email' => $email, // trường thông tin email trong DB => giá trị
            'password' => $password // trường thông tin password trong DB => giá trị
        ])) {

            return redirect()->route('/');
        } else {

            return redirect()->route('auth.getLogin');
        }
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
       //dd($request->all());
       $user= new User();
       $user= $user->fill($request->all());
       $user->password=Hash::make($request->password);
       $user->role = 1;
       $user->avatar='null';
       $user->status='0';
       $user->save();

       return redirect()->route('/');
    }

    public function logout(Request $request)
    {
        // xoá session user đã đăng nhập
        Auth::logout();
        // 2 câu lệnh bên dưới có ở laravel 8 và 9
        // Huỷ toàn bộ session đi
        $request->session()->invalidate();
        // Tạo token mới
        $request->session()->regenerateToken();
        // Quay về màn login
        return redirect()->route('auth.getLogin');
    }
}
