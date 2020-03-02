<?php


Route::get('/', 'PostController@index')->name('main');

Auth::routes();

Route::get('/single/post/{post_id}', 'SinglePostController@show')->name('single_post');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/create/post', 'HomeController@createPost')->name('create_post');
Route::post('/store/post', 'HomeController@storePost')->name('store_post');
Route::get('/edit/post/{post_id}', 'HomeController@editPost')->name('edit_post');
Route::post('/update/post/{post_id}', 'HomeController@updatePost')->name('update_post');
Route::post('/delete/post/{post_id}', 'HomeController@deletePost')->name('delete_post');

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
