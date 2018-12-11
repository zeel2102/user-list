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

Route::get('/test', 'CustomController@index');
Route::get('/user/display','UserController@index');
Route::get('/user/add','UserController@create');
Route::get('/user/add','UserController@add');

Route::post('/user/display','UserController@store')->name('store');
