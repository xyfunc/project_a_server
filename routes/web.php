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
Route::get('/welcome', 'IndexController@welcome');

Route::post('/user/register', 'Auth\RegisterController@store');
Route::get('/user/register', 'Admin\UserController@create');
Route::get('/user/login', 'Admin\UserController@login');
Route::get('/login', 'Admin\UserController@login');
Route::get('/user/logout', 'Auth\LoginController@logout');
Route::post('/user/login', 'Auth\LoginController@authenticate');

Route::group([ 'namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function (){

    Route::resource('product', 'ProductController');
    Route::resource('purchase', 'PurchaseController');

});
//Auth::routes();

Route::get('/init', 'IndexController@init');
Route::post('/init', 'IndexController@initDatabase');
