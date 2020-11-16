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

Route::get('test','App\Http\Controllers\TestController@index');
// Route::get('hello/other','App\Http\Controllers\TestController@other');
Route::get('test/add','App\Http\Controllers\TestController@add');
Route::post('test/add','App\Http\Controllers\TestController@create');
Route::get('test/edit','App\Http\Controllers\TestController@edit');
Route::post('test/edit','App\Http\Controllers\TestController@update');
Route::get('test/del','App\Http\Controllers\TestController@del');
Route::post('test/del','App\Http\Controllers\TestController@remove');
