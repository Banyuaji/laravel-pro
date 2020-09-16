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

Route::get('/', function () {
    return view('template.index');
});

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/create', 'AdminController@create')->name('create');
Route::post('/store', 'AdminController@store')->name('store');
Route::get('/cuser', 'AdminController@get')->name('get');
Route::get('/destroy/{id}', 'AdminController@destroy')->name('destroy');
Route::get('/edit/{id}', 'AdminController@edit')->name('edit');
Route::post('/update/{id}', 'AdminController@update')->name('update');