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


Auth::routes();

Route::get('/', 'HomeController@index')
	->name('index');

Route::get('create', 'PostsController@create')
	->name('create');

Route::get('edit/{id}', 'PostsController@edit')
	->name('edit');

Route::post('update/{id}', 'PostsController@update')
	->name('update');

Route::get('all', 'PostsController@all')
	->name('all');

Route::get('single/{id}', 'PostsController@single')
	->name('single');

Route::get('destroy/{id}', 'PostsController@destroy')
	->name('destroy');

Route::get('comments/destroy/{id}', 'CommentsController@destroy')
	->name('comments/destroy');

Route::get('comments/create', 'CommentsController@create')
	->name('comments/create');

Route::post('comments/store/{id}', 'CommentsController@store')
	->name('comments/store');

Route::get('comments/show', 'CommentsController@show')
	->name('comments/show');

Route::resource('posts', 'Postcontroller');




