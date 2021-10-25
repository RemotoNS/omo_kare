<?php

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
Route::get('/new', function () {
    return view('new');
});
Route::post('/store', "App\Http\Controllers\GiftController@store") ;
Route::get('/show_sub/{id}', "App\Http\Controllers\GiftController@show_sub") ;
Route::get('/index', "App\Http\Controllers\GiftController@index") ;

//test
Route::get('/testJs', "App\Http\Controllers\GiftController@testJs") ;





// コウヘイ専用ページ
Route::get('/main', "App\Http\Controllers\GiftController@main") ;
Route::get('/show/{id}', "App\Http\Controllers\GiftController@show") ;
Route::get('/destroy_ok/{id}', "App\Http\Controllers\GiftController@destroy_ok") ;
Route::get('/destroy/{id}', "App\Http\Controllers\GiftController@destroy") ;

// ログインページ
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// キャラ作りのためのメソッド
Route::get('/chara', function () {
    return view('characters');
});
Route::post('/store_chara', "App\Http\Controllers\GiftController@store_chara") ;

// スター作りのためのメソッド
Route::get('/star', function () {
    return view('star');
});
Route::post('/store_star', "App\Http\Controllers\GiftController@store_star") ;