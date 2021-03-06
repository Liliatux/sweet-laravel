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

Route::get('/', 'SweetController@getSweet');

Route::post('/addSweet', 'SweetController@postSweet');

Route::get('/decreaseStock/{id}', 'SweetController@decreaseStock');

Route::get('/increaseStock/{id}', 'SweetController@increaseStock');
