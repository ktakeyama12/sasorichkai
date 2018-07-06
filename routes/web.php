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

Route::get('/banana', 'MainController@banana')->name('banana');

Route::get('index', 'ContentsController@index')->name('contents.index');
Route::get('branch', 'ContentsController@branch')->name('contents.branch');
Route::post('contents.store', 'ContentsController@store')->name('contents.store');

Route::get('/phpfirebase_sdk','FirebaseController@index');
