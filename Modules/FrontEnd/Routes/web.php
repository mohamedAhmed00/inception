<?php

Route::get('/', 'FrontEndController@index');
Route::get('/about', 'FrontEndController@about');
Route::get('/read-more/about', 'FrontEndController@aboutReadMore');
Route::get('/services', 'FrontEndController@services');
Route::get('/contact', 'FrontEndController@contact');
Route::post('/contact', 'FrontEndController@sendMessage');
Route::get('/testimonial', 'FrontEndController@testimonial');
Route::get('/testimonial/{id}', 'FrontEndController@singleTestimonial');
Route::get('/team/{id}', 'FrontEndController@team');
Route::get('/service/{id}', 'FrontEndController@service');

