<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
	return view('page');
})->middleware('auth');

Route::post('/upfile', 'FileController@upload');

Route::post('/storepost','PostsController@store')->middleware('auth');

Route::get('/posts', 'PostsController@getposts');

Route::get('/userid','UserController@index')->middleware('auth');