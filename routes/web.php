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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'activitys'], function(){
    Route::get('index', 'ActivityController@index')->name('activitys');

    Route::get('create','ActivityController@create')->name('activitys.create');
});

Route::group(['prefix' => 'registers'], function(){
    Route::get('index', 'Register\RegistersController@index')->name('registers');
    Route::get('ambil-formulir', 'Register\RegistersController@create')->name('registers.ambil-formulir');
});

Route::group(['prefix' => 'users'], function(){
    Route::get('index', 'User\UserController@index')->name('users');
});