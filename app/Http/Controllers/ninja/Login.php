<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class Login extends Controller
{
    public function showLogin(Request $request)
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Session::flush();

        Auth::logout();

        return redirect('login');
    }

    public function checkLogin(Request $request)
    {
        $user = DB::table('player')->where('username', $request->username)->where('password', $request->password);
        var_dump($user);
        if (!empty($user)) {
            $request->session()->regenerate();
            Session::flash('login_sucess', 'Đăng nhập thành công');
            return redirect()->route('user.detail');
        } else {
            Session::flash('error', 'User or Password is incorrect');
            return redirect()->route('login.show');
        }
    }
}
