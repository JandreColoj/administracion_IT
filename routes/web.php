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

Route::get('/info', function () {
    return view('info');
});

Route::get('/kpi', function () {
    return view('kpi');
});

Route::get('/tema', function () {
    return view('theme');
});

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/login');
});

Route::get('/', 'HomeController@index');
Route::get('', 'HomeController@index');
Route::get('home', 'HomeController@index');

Auth::routes();

