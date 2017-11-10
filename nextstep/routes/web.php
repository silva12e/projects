<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Dashboard routes
Route::post('/admin/events', 'EventsController@index');
Route::post('/admin/events/types', 'EventsController@eventTypesIndex');
Route::delete('admin/events/remove/{id}', 'EventsController@destroy');
Route::delete('/admin/event-type/remove/{id}', 'EventsController@destroyEventType');

Route::post('/user/register', 'Auth\RegisterController@store');
Route::post('/admin/events/create-event', 'EventsController@store');
Route::post('/admin/events/create-event-type', 'EventsController@createEventType');
Route::get('/admin/events/{id}', 'EventsController@getEvent');
Route::post('/admin/events/update/{id}', 'EventsController@update');

Route::post('/admin/blog', 'PostsController@index');
Route::post('/admin/blog/create-post', 'PostsController@store');
Route::get('/admin/blog/{id}', 'PostsController@getPost');
Route::post('/admin/blog/update/{id}', 'PostsController@update');
Route::delete('admin/blog/remove/{id}', 'PostsController@destroy');


Route::post('/admin/blog/post/category', 'PostsController@getCategories');
Route::post('/admin/events/create-post-category', 'PostsController@createCategory');
Route::delete('/admin/post-category/remove/{id}', 'PostsController@destroyCategory');


//Vue routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('{vue_capture?}', function () {
        return view('Home');
    })->where('vue_capture', '[\/\w\.-]*');
});

Route::get('/{vue_capture?}', function () {
    return view('index');
})->where('vue_capture', '[\/\w\.-]*');