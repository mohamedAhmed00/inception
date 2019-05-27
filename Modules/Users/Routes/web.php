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

Route::prefix('_admin_/users')->middleware('auth')->group(function() {
    Route::get('/', 'UsersController@index');
    Route::get('/add', 'UsersController@create')->name('user.create');
    Route::get('/profile', 'UsersController@show')->name('user.show');
    Route::post('/store', 'UsersController@store')->name('user.store');

    Route::get('/{id}/edit', 'UsersController@edit')->name('user.edit');
    Route::patch('/{id}/edit', 'UsersController@update')->name('user.update');

    Route::get('/delete/{id}', 'UsersController@destroy')->name('user.delete');
});
