<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormRegisterUser;
use App\Models\Player;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserDetail extends Controller
{
    public function userDetail()
    {
        return view('detail');
    }

}

