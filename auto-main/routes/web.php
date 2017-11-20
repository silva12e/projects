<?php

// Vehicle type Routes
Route::get('/', 'HomeController@getHomepage');
Route::get('/vehicle-types', 'TypesController@index');
Route::post('/vehicle-types/store', 'TypesController@store');
Route::post('/vehicle-types/remove/{id}', 'TypesController@destroy');
Route::post('/vehicle-types/types', 'TypesController@getAllTypes');

// Service Routes
Route::get('/services', 'ServicesController@index');
Route::get('/services/vehicle-category/{id}', 'ServicesController@services');
Route::post('/services/vehicle-category/{id}', 'ServicesController@getServices');
Route::post('/service/store', 'ServicesController@store');
Route::post('/service/show/{id}', 'ServicesController@show');
Route::post('/service/vehicle-type/{id}', 'ServicesController@getServiceByType');
Route::post('/service/remove/{id}', 'ServicesController@destroy');

//Appointment Routes
Route::get('/appointments', 'AppointmentsController@index');

//Authentication routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
