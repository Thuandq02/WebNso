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
    $level = DB::select('SELECT ninja.name, ninja.level, ninja.exp FROM ninja ORDER BY exp DESC LIMIT 10');
    $exps = DB::select('SELECT level.level, level.exps FROM level');
    $topSk = DB::select('SELECT ninja.name, ninja.topmanh FROM ninja ORDER BY topmanh DESC LIMIT 5');

    //user
    $user = [
        'nap' => $nap,
        'level' => $level,
        'topSk' => $topSk,
    ];
    //bxh nap
    $userNap = [];
    foreach ($user['nap'] as $item) {
        $userNap[] = [
            'name' => $item->username,
            'nap' => $item->tongnap
        ];
    }
    $user['nap'] = $userNap;

    // exp mỗi lv
    $expLevel = 0;
    $expUp = [];
    foreach ($exps as $item) {
        $expLevel += $item->exps;
        $expUp[$item->level] = $expLevel;
    }

    //bxh level
    $userLevel = [];
    foreach ($user['level'] as $item) {
        $currentExp = $exps[$item->level]->exps - ($expUp[$item->level] - $item->exp);
        $ptLv = ($currentExp / $exps[$item->level]->exps) * 100;
        $userLevel[] = [
            'name' => $item->name,
            'level' => $item->level,
            'ptLevel' => number_format($ptLv, 2)
        ];
    }
    $user['level'] = $userLevel;

    //bxh top sk
    $userTopSk = [];
    foreach ($user['topSk'] as $item) {
        $userTopSk[] = [
            'name' => $item->name,
            'topmanh' => $item->topmanh
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

