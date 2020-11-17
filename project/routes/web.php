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


Route::resource('/', 'User\HomeController', ['only' => 'index']);

//ユーザーログイン
Route::namespace('User')->name('user.')->group(function () {
    Auth::routes([
        'register' => true,
        'reset'    => false,
        'verify'   => false,
    ]);
    //ログイン認証後
    Route::middleware('auth:user')->group(function() {
        //TOPページ
        // Route::resource('/', 'HomeController', ['only' => 'index']);
        Route::get('/logout', 'Auth\LoginController@logout');
    });
});

//アドミンログイン
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Auth::routes([
        'register' => false,
        'reset'    => false,
        'verify'   => false,
    ]);
    //ログイン認証後
    Route::middleware('auth:admin')->group(function() {
        //TOPページ
        Route::resource('home', 'HomeController', ['only' => 'index']);
        Route::get('/logout', 'Auth\LoginController@logout');
        Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/register', 'Auth\RegisterController@register')->name('create');
        Route::get('account/admin_list', 'HomeController@showAdminList');
    });
});
