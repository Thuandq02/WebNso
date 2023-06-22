<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PasswordRetrieval extends Controller
{
    public function showRetrievalForm()
    {
        return view('pasretrieval');
    }

    public function passRetrieval(Request $request)
    {
        $user = DB::select('SELECT * FROM player WHERE username= "'.$request->username.'" && phone= "'.$request->phone.'"');
        if (!empty($user) && $request->new_password == $request->confirm_new_password) {
            DB::select('UPDATE player SET password = "'.$request->new_password.'" WHERE username="'.$request->username.'"');
            return redirect()->to('pasretrieval')
                ->withErrors("  Đổi mật khẩu thành công");
        } else {
            return redirect()->to('pasretrieval')
                ->withErrors("  Tài khoản hoặc số điện thoại không đúng");
        }
    }

}

