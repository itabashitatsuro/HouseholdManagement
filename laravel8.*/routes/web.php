<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;

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

Route::get('/', function () {
    return view('topPage');
});

// 入力画面
Route::get('/todayBalanceInput', function () {
    return view('/todayBalanceInput');
});

// 入力確認画面
Route::post('/confirm', [InputController::class, 'inputConfirm']);

// 登録処理
Route::get('/regist', [InputController::class, 'regist']);
