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

Route::get('/','UserController@index');
Route::get('/delete/{id}','UserController@userDelete');

Route::patch('/test','UserController@userUpdate');

Route::post('/adduser','UserController@userAdd');
Route::post('/search','UserController@userSearch');