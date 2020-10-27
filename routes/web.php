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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/discover/{id}', 'AppController@show')->name('preview');
Route::post('/discover/{id}', 'AppController@store')->name('discover');
Route::get('/{category}', 'CategoryController@show')->name('category');
Route::get('/{category}/{id}', 'CategoryController@show')->name('category.list');
Route::get('/{category}/{app}', 'AppController@index')->name('app');