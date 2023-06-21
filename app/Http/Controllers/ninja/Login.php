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
        Auth::guard('player')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function checkLogin(Request $request)
    {
        $user = DB::select('SELECT player.username, player.password FROM player WHERE username= "'.$request->username.'"');
        if (!empty($user) && $user[0]->password == $request->password) {
            $request->session()->regenerate();
            Session::flash('login_sucess', 'Đăng nhập thành công');
            return redirect()->route('user.detail');
        } else {
            return redirect()->to('login')
                ->withErrors("  Tài khoản hoặc mật khẩu không chính xác");
        }
    }
}
