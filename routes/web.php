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
Route::get('/getstarted', 'GetStartedController@index');
Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/profile', 'PostController@index');
// Route::get('/kevin1', 'CommentController@test');


Route::resource('/post', 'PostController');
