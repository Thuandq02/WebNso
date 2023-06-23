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

Route::get('/bxh', function () {
    $nap = DB::select('SELECT player.username, player.tongnap FROM player ORDER BY tongnap DESC LIMIT 5');
    $level = DB::select('SELECT ninja.name, ninja.level FROM ninja ORDER BY level DESC LIMIT 10');
    $topSk = DB::select('SELECT ninja.name, ninja.topmanh FROM ninja ORDER BY topmanh DESC LIMIT 5');
    $user = [
        'nap'=>$nap,
        'level'=>$level,
        'topSk'=>$topSk,
    ];
    $userNap = [];
    foreach ($user['nap'] as $item) {
        $userNap[] = [
            'name'=>$item->username,
            'nap'=>$item->tongnap
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
    $userTopSk = [];
    foreach ($user['topSk'] as $item) {
        $userTopSk[] = [
            'name'=>$item->name,
            'topmanh'=>$item->topmanh
        ];
    }
    $user['topSk'] = $userTopSk;
    return view('bxh', compact('user'));
});


Route::get('/home', [\App\Http\Controllers\ninja\Router::class, 'showHome'])->name('show.home');
Route::get('/setinfor', [\App\Http\Controllers\ninja\Router::class, 'showSetInfor'])->name('show.setinfor');
Route::get('/reg', [\App\Http\Controllers\ninja\Router::class, 'showReg'])->name('show.reg');
Route::get('/register', [\App\Http\Controllers\ninja\Register::class, 'showRegisterForm'])->name('register.show');
Route::post('/register', [\App\Http\Controllers\ninja\Register::class, 'register'])->name('register.user');
Route::post('/setPassword', [\App\Http\Controllers\ninja\SetInfor::class, 'setPassword'])->name('set.password');
Route::post('/setPhone', [\App\Http\Controllers\ninja\SetInfor::class, 'setPhone'])->name('set.phone');
Route::get('/pasretrieval', [\App\Http\Controllers\ninja\PasswordRetrieval::class, 'showRetrievalForm'])->name('show.retrieval');
Route::post('/pasretrieval', [\App\Http\Controllers\ninja\PasswordRetrieval::class, 'passRetrieval'])->name('pass.retrieval');

