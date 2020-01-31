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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all/jobposts', 'HomeController@JobPostList')->name('all_jobposts');
Route::get('/all/articles', 'HomeController@ArticleList')->name('all_articles');
Route::get('/create/jobpost', 'HomeController@createJobPost')->name('create_job_post');
Route::get('/create/article', 'HomeController@createArticle')->name('create_article');
Route::post('/store/post', 'HomeController@storePost')->name('store_new_post');
