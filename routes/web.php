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



Route::get('/', 'BasicController@getIndex');
Route::get('/about', 'BasicController@index');
//Route::get('/sales', 'BaseController@getIndex');
Auth::routes();
Route::get('/sales', 'BasicController@getSales');
Route::get('/new', 'BasicController@getNew');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/basket', 'BasketController@getIndex');
Route::get('/home', 'HomeController@index');
Route::get('/genre/{id}', 'GenreController@getIndex');

Route::get('{id}', 'StaticController@getindex');
 
