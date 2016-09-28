<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/




Route::group(['midleware' => ['web']], function () {
    Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug', '[\w\d\-\_]+');

    Route::get('blog', [
       'uses' => 'blogController@getIndex',
        'as' => 'blog.index'
    ]);
    Route::get('/', 'pagesController@getIndex');
    Route::get('contact', 'pagesController@getContact');
    Route::get('about', 'pagesController@getAbout');
    Route::resource('posts', 'postController');
});