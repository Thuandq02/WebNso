<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRegisterUser;
use App\Models\Player;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Register extends Controller
{
    public function showRegisterForm()
    {
        return view('reg');
    }

    public function register(FormRegisterUser $request)
    {
        $user = DB::table('player')->where('username', $request->username);
        if (empty($user)) {
            $user = new Player();
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->password = $request->password;
            $user->status = "wait";
            $user->save();
            Session::flash('registed_sucess', 'Đăng kí thành công');
            return redirect()->route('login.show');
        } else {
            Session::flash('error', 'Account is already in use');
            return redirect()->route('register.show');
        }

    }

}

