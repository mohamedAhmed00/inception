<?php

Route::prefix('_admin_/slider')->middleware('auth')->group(function() {
    Route::get('/', 'SliderController@index');
    Route::get('/add', 'SliderController@create')->name('slider.create');
    Route::post('/store', 'SliderController@store')->name('slider.store');

    Route::get('/{id}/edit', 'SliderController@edit')->name('slider.edit');
    Route::patch('/{id}/edit', 'SliderController@update')->name('slider.update');

    Route::get('/delete/{id}', 'SliderController@destroy')->name('slider.delete');
});
