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

Route::prefix('_admin_/client')->middleware('auth')->group(function() {
    Route::get('/', 'ClientController@index');
    Route::get('/add', 'ClientController@create')->name('client.create');
    Route::post('/store', 'ClientController@store')->name('client.store');

    Route::get('/{id}/edit', 'ClientController@edit')->name('client.edit');
    Route::patch('/{id}/edit', 'ClientController@update')->name('client.update');

    Route::get('/delete/{id}', 'ClientController@destroy')->name('client.delete');
});
