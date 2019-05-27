<?php

Route::prefix('_admin_/contact')->middleware('auth')->group(function() {
    Route::get('/', 'ContactController@index');
    Route::get('show/{id}', 'ContactController@show')->name('contact.show');
    Route::get('/delete/{id}', 'ContactController@destroy')->name('contact.delete');

});
