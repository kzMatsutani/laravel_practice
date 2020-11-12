<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//ユーザーログイン
Route::namspace('User')->prefix('user')->name('user,')->group(function () {
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false,
    ]);
    //ログイン認証後
    Route::middleware('auth:user')->group(function() {
        //TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
    });
});
//アドミンログイン
Route::namspace('Admin')->prefix('admin')->name('admin,')->group(function () {
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false,
    ]);
    //ログイン認証後
    Route::middleware('auth:admin')->group(function() {
        //TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
    });
});
