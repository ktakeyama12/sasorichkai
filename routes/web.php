<?php

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
// */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('rakuten', 'AController@rakuten')->name('rakuten');
Route::get('cafe', 'AController@cafe')->name('cafe');
Route::get('movie', 'AController@movie')->name('movie');
Route::get('amusement', 'AController@amusement')->name('amusement');
Route::get('shopping', 'AController@shopping')->name('shopping');
Route::get('workinfo', 'AController@workinfo')->name('workinfo');

Route::get('/banana', 'MainController@banana')->name('banana');
Route::get('/match', 'MainController@match')->name('match');
Route::get('/shooting', 'MainController@shooting')->name('shooting');
Route::get('/quiz', 'MainController@quiz')->name('quiz');
Route::get('/mihon', 'MainController@mihon')->name('mihon');

Route::get('index', 'ContentsController@index')->name('contents.index');

Route::get('/sakusei', 'QuizController@sakusei')->name('sakusei');
Route::get('/answer', 'QuizController@answer')->name('answer');
Route::post('quiz.store', 'QuizController@store')->name('quiz.store');
Route::post('quiz.answerinput', 'QuizController@answerinput')->name('quiz.answerinput');

Route::get('index', 'ContentsController@index')->name('contents.index');

// branch
Route::get('contents.branch', 'ContentsController@branch')->name('contents.branch');
Route::get('fukuoka', 'ContentsController@fukuoka')->name('contents.fukuoka');
Route::post('fukuokafavorite', 'UsersController@fukuokafavorite')->name('fukuokafavorite');
Route::post('fukuokaunfavorite', 'UsersController@fukuokaunfavorite')->name('fukuokaunfavorite');
// Route::group(['prefix' => 'branches/fukuoka'], function () {
//         Route::post('fukuokafavorite', 'BranchfavoritesController@store')->name('fukuokafavorite');
//         Route::delete('unfavorite', 'FavoriteController@destroy')->name('micropost.unfavorite');
//     });
    

Route::get('tokyo', 'ContentsController@tokyo')->name('contents.tokyo');
Route::get('osaka', 'ContentsController@osaka')->name('contents.osaka');
Route::get('fukuoka', 'ContentsController@fukuoka')->name('contents.fukuoka');
Route::get('okinawa', 'ContentsController@okinawa')->name('contents.okinawa');

Route::get('gallery', 'ContentsController@gallery')->name('contents.gallery');

Route::post('contents.storeF', 'ContentsController@storeF')->name('contents.storeF');

//branch favorite
        Route::post('branchfavorite/{id}', 'BranchfavoritesController@store')->name('branchfavorite');
        Route::delete('unfavorite', 'BranchfavoritesController@destroy')->name('micropost.unfavorite');
   

Route::get('users.show', 'MainController@show')->name('users.show');

Route::post('contents.store/{id}', 'ContentsController@store')->name('contents.store');

Route::get('/phpfirebase_sdk','FirebaseController@index');


Route::get('test', 'MainController@test')->name('test');


// Login authentication
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


// user registration
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');