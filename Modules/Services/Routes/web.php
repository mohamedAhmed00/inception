<?php

Route::prefix('_admin_/services')->middleware('auth')->group(function() {
    Route::get('/', 'ServicesController@index');
    Route::get('/add', 'ServicesController@create')->name('service.create');
    Route::post('/store', 'ServicesController@store')->name('service.store');

    Route::get('/{id}/edit', 'ServicesController@edit')->name('service.edit');
    Route::patch('/{id}/edit', 'ServicesController@update')->name('service.update');

    Route::get('/delete/{id}', 'ServicesController@destroy')->name('service.delete');
});
