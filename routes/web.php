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


Route::get('/check', 'FavoriteController@checkList')->name('check');
Route::get('/', 'FavoriteController@showList')->name('favorites');



Route::get('/new', 'FavoriteController@create')->name('create');

Route::post('/new', 'FavoriteController@store')->name('store');

Route::post('/delete/{id}', 'FavoriteController@delete')->name('delete');

Auth::routes();
Route::get('/{id}', 'FavoriteController@detail')->name('favorite');

Route::get('/home', 'HomeController@index')->name('home');
