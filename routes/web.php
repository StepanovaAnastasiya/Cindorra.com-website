<?php
Route::get('/', 'PagesController@index')->name('main');
Route::get('/explore/{cat_slug}', 'PostController@explore')->name('explore');
Route::get('/{cat_slug}/{slug}', 'PostController@show')->name('single_post');

Auth::routes();
Route::get('/profile', 'HomeController@index')->name('home');
Route::get('/post', 'HomeController@createPost')->name('create_post');

//Remove this, use {{url()}} in your .blade file
Route::post('/store/post', 'HomeController@storePost')->name('store_post');

Route::get('/edit/{cat_slug}/{slug}', 'HomeController@editPost')->name('edit_post');
Route::post('/update/{slug}', 'HomeController@updatePost')->name('update_post');
Route::post('/delete/{slug}', 'HomeController@deletePost')->name('delete_post');

// Route::domain('{admin}.domain.com')->group(function () {
//     Auth::routes();
//     Route::get('/', 'AdminController@index');
//     Route::get('/drafts', 'AdminController@drafts');
//     Route::get('/create', 'AdminController@create');
//     Route::get('/{type}/{slug}', 'AdminController@show');
//     Route::get('/edit/{type}/{slug}', 'AdminController@edit');
//     Route::post('/store', 'AdminController@store');
//     Route::put('/edit/{type}/{slug}', 'AdminController@update');
//     Route::delete('{type}/{slug}', 'AdminController@destroy');
// });
