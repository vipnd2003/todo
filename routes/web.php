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

Route::get('users', 'UsersController@index')->name('users.index');

Route::match(['get', 'post'], 'users/create', 'UsersController@create')->name('users.create');
Route::match(['get', 'post'], 'users/confirm', 'UsersController@createConfirm')->name('users.create_confirm');
Route::post('users', 'UsersController@store')->name('users.store');