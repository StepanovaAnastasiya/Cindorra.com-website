<?php
Route::get('/', 'PostController@index')->name('main');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all/jobposts', 'HomeController@JobPostList')->name('all_jobposts');
Route::get('/all/articles', 'HomeController@ArticleList')->name('all_articles');
Route::get('/create/jobpost', 'HomeController@createJobPost')->name('create_job_post');
Route::get('/create/article', 'HomeController@createArticle')->name('create_article');
Route::post('/store/post', 'HomeController@storePost')->name('store_new_post');
Route::get('/edit/job/post/{post_id}', 'HomeController@editJobPost')->name('edit_job_post_form');
Route::get('/edit/article/{post_id}', 'HomeController@editArticle')->name('edit_article_form');
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
