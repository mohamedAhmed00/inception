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

Route::prefix('_admin_/testimonial')->middleware('auth')->group(function() {
    Route::get('/', 'TestimonialsController@index');
    Route::get('/add', 'TestimonialsController@create')->name('testimonial.create');
    Route::post('/store', 'TestimonialsController@store')->name('testimonial.store');

    Route::get('/{id}/edit', 'TestimonialsController@edit')->name('testimonial.edit');
    Route::patch('/{id}/edit', 'TestimonialsController@update')->name('testimonial.update');

    Route::get('/delete/{id}', 'TestimonialsController@destroy')->name('testimonial.delete');
});
