<?php

Route::prefix('_admin_/team')->middleware('auth')->group(function() {
    Route::get('/', 'TeamController@index');
    Route::get('/add', 'TeamController@create')->name('team.create');
    Route::post('/store', 'TeamController@store')->name('team.store');

    Route::get('/{id}/edit', 'TeamController@edit')->name('team.edit');
    Route::patch('/{id}/edit', 'TeamController@update')->name('team.update');

    Route::get('/delete/{id}', 'TeamController@destroy')->name('team.delete');
});
