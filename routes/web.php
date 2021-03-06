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

use App\Http\Middleware\HelloMiddleware;
use App\Http\Middleware\TestMiddleware;

Route::get('/', function () {
    return view('welcome');
});


Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');
Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');
Route::get('hello/del', 'HelloController@confirm');
Route::post('hello/del', 'HelloController@del');
Route::get('test', 'TestController@test');
Route::post('test', 'TestController@post');

// Route::get('users', 'TestController@users');
// Route::get('test', 'TestController@test');
// Route::get('test/success', 'TestController@success');