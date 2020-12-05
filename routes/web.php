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

Route::get('/','webController@index');

Route::get('/Admin','adminController@index');
Route::post('/Admin/slider','adminController@slider_store')->name('slider_store');
Route::get('/Admin/slider/show/{id}','adminController@slider_show')->name('slider_show');
Route::delete('/Admin/slider/{id}','adminController@slider_destroy')->name('slider_destroy');
Route::put('/Admin/slider','adminController@slider_update');
Route::get('/Admin/slider/showall/{id}','adminController@slider_show_all');


