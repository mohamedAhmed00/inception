<?php

Route::prefix('_admin_/setting')->middleware('auth')->group(function() {
    Route::get('/', 'SettingController@index');
    Route::get('/add', 'SettingController@create')->name('setting.create');
    Route::post('/store', 'SettingController@store')->name('setting.store');

    Route::get('/{id}/edit', 'SettingController@edit')->name('setting.edit');
    Route::post('/{id}/edit', 'SettingController@update')->name('setting.update');

    Route::get('/delete/{id}', 'SettingController@destroy')->name('setting.delete');
});
