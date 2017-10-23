<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');


//Dashboard routes
Route::post('/user/register', 'Auth\RegisterController@create');


//Vue routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('{vue_capture?}', function () {
        return view('Home');
    })->where('vue_capture', '[\/\w\.-]*');
});

Route::get('/{vue_capture?}', function () {
    return view('index');
})->where('vue_capture', '[\/\w\.-]*');