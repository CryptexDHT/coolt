<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showFront');
Route::post('/api/comment/post', 'HomeController@postComment');
Route::get('/api/links', 'HomeController@getLinks');
Route::get('/api/catalog', 'HomeController@getCatalog');
Route::get('/api/thread', 'HomeController@getThread');
Route::get('/api/news', 'HomeController@getNews');
