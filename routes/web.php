<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/reg', function () {
    return view('reg');
});
Route::get('/repass', function () {
    return view('repass');
});

Route::get('/bxh', function () {
    $nap = DB::select('SELECT ninja.name, ninja.nap FROM ninja ORDER BY nap DESC LIMIT 5');
    $level = DB::select('SELECT ninja.name, ninja.level FROM ninja ORDER BY level DESC LIMIT 5');
    $user = [
        'nap'=>$nap,
        'level'=>$level
    ];
    $userNap = [];
    foreach ($user['nap'] as $item) {
        $userNap[] = [
            'name'=>$item->name,
            'nap'=>$item->nap
        ];
    }
    $user['nap'] = $userNap;
    $userLevel = [];
    foreach ($user['level'] as $item) {
        $userLevel[] = [
            'name'=>$item->name,
            'level'=>$item->level
        ];
    }
    $user['level'] = $userLevel;
    return view('bxh', compact('user'));
});


Route::get('/login', [\App\Http\Controllers\ninja\Login::class, 'showLogin'])->name('login.show');
Route::post('/login', [\App\Http\Controllers\ninja\Login::class, 'checkLogin'])->name('login.check');
Route::post('/logout', [\App\Http\Controllers\ninja\Login::class, 'logout'])->name('user.logout');
Route::get('/register', [\App\Http\Controllers\ninja\Register::class, 'showRegisterForm'])->name('register.show');
Route::post('/register', [\App\Http\Controllers\ninja\Register::class, 'register'])->name('register.user');
Route::get('/detail', [\App\Http\Controllers\ninja\UserDetail::class, 'userDetail'])->name('user.detail');

