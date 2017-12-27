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


Route::get('/', 'WelcomeController@index')->name('home');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::post('/admin', 'AdminController@create');
Route::get('/admin', 'AdminController@index');

Route::get('/gallery', 'GalleryController@index');
Route::post('/gallery', 'GalleryController@upload');

Route::post('/order', 'OrderController@create');
