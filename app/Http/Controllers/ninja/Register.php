<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRegisterUser;
use Illuminate\Http\Request;
use App\Models\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Register extends Controller
{
    public function showRegisterForm()
    {
        return view('reg');
    }

    public function register(FormRegisterUser $request)
    {
        $user = DB::select('SELECT player.username FROM player WHERE username= "' . $request->username . '"');
        if (empty($user)) {
            $user = new Player();
            $user->username = $request->username;
            $user->phone = $request->phone;
            $user->password = $request->password;
            $user->status = "active";
            $user->save();
            return redirect()->to('reg')
                ->withErrors("  Đăng kí thành công");
        }
        return redirect()->to('reg')
            ->withErrors("  Tài khoản đã có người đăng kí");


    }

}

