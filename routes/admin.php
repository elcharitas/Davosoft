<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider.
|
*/

Route::get('/', 'HomeController@index')->name('index');
Route::get('/auth/unlock', 'AuthController@locked')->name('lock');
Route::post('/auth/unlock', 'AuthController@unlock')->name('unlock');
Route::get('/auth/logout', 'AuthController@destroy')->name('logout');
Route::post('/auth', 'AuthController@login')->name('auth');
Route::get('/auth', 'AuthController@show')->name('login');
Route::resource('/category', 'CategoryController');
Route::resource('category.apps', 'ListController');