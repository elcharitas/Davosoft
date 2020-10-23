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

Route::get('/', 'Home@index')->name('homepage');
Route::get('/discover/{id}', 'App@show')->name('preview');
Route::post('/discover/{id}', 'App@store')->name('download');
Route::get('/{category}', 'Category@show')->name('category');
Route::get('/{category}/{id}', 'Category@show')->name('cat');
Route::get('/{category}/{app}', 'App@index')->name('app');