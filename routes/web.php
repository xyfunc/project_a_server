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

Route::get('/', 'IndexController@index');

Route::post('/user/register', 'Auth\RegisterController@store');
Route::get('/user/register', 'Admin\UserController@create');
Route::get('/user/login', 'Admin\UserController@login');
Route::post('/user/login', 'Auth\LoginController@authenticate');

Route::group([ 'namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function (){

    Route::resource('product', 'ProductController');

});
//Auth::routes();

Route::get('/database/init', 'IndexController@init');
Route::post('/database/init', 'IndexController@initDatabase');
