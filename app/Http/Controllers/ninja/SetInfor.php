<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SetInfor extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setPassword(Request $request) {
        $user = DB::select('SELECT player.username, player.password FROM player WHERE username= "'.$request['username'].'"');
        if (!empty($user) && $request['password'] == $user[0]->password) {
            if ($request['new_password'] == $request['new_password_confirmation']) {
                DB::select('UPDATE player SET password = "'.$request['new_password'].'" WHERE username="'.$request['username'].'"');
                return redirect()->to('setinfor')
                    ->withErrors("  Cập nhật thông tin thành công");
            } else {
                return redirect()->to('setinfor')
                    ->withErrors("  Mật khẩu xác nhận không đúng");
            }
        }
        return redirect()->to('setinfor')
            ->withErrors("  Tài khoản hoặc mật khẩu không đúng");
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function setPhone(Request $request) {
        $user = DB::select('SELECT player.phone FROM player WHERE username= "'.$request['username'].'"');
        if (count($user) > 0 && $request['phone'] == $user[0]->phone) {
            DB::select('UPDATE player SET phone = "'.$request['new_phone'].'" WHERE username="'.$request['username'].'"');
            return redirect()->to('setinfor')
                ->withErrors("  Cập nhật thông tin thành công");
        }
        return redirect()->to('setinfor')
            ->withErrors("  Tài khoản hoặc số điện thoại không đúng ");
    }

}

