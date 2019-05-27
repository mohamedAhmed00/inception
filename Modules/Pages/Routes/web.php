<?php

Route::prefix('_admin_/page')->middleware('auth')->group(function() {
    Route::get('/{page}', 'PagesController@index');
    Route::post('/{page}', 'PagesController@store');
});
