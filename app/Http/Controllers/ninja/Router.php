<?php

namespace App\Http\Controllers\ninja;

use App\Http\Controllers\Controller;

class Router extends Controller
{
   public function showReg() {
       return view('reg');
   }
    public function showSetInfor() {
        return view('setinfor');
    }

    public function showHome() {
        return view('welcome');
    }
}

