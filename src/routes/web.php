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
// use Request;



Route::namespace('LILPLP\IBAsBlog\Http\Controllers')->group(function () {

	Route::get('/blog/', 'PostController@index');


	Route::get('/blog/introduction/', function(){
		$page = new App\Http\Controllers\PageController('blog/introduction/');
		return $page->show();
	});
	Route::get('/blog/categories/{slug}', 'PostController@category');
// 	Route::get('/blog/feed/{type}', 'PostController@feed');
	Route::get('/blog/{post}/', 'PostController@show')->name('post');
	Route::get('/blog/{post}/{asset?}', 'PostController@asset');

	
	Route::middleware('auth:api')->prefix('/api/backend/post')->group(function () {
		Route::get('/', 'PostController@manage');
		Route::get('/create/', 'PostController@create');
		Route::post('/', 'PostController@store');
		Route::get('/{post}/edit', 'PostController@edit');
		Route::patch('/{post}/', 'PostController@update');
	});
});