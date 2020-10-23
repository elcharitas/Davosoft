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

Route::get('/', 'Home@index')->name('index');
Route::get('/auth/unlock', 'Auth@locked')->name('lock');
Route::post('/auth/unlock', 'Auth@unlock')->name('unlock');
Route::get('/auth/logout', 'Auth@destroy')->name('logout');
Route::post('/auth', 'Auth@login')->name('auth');
Route::get('/auth', 'Auth@show')->name('login');
Route::resource('/category', 'Category');
Route::resource('category.apps', 'Apps');