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
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('rpoint', 'HomeController@rpoint')->name('rpoint');

Route::get('rakuten', 'AController@rakuten')->name('rakuten');
Route::get('rakutenprime', 'AController@rakutenprime')->name('rakutenprime');
Route::get('cafe', 'AController@cafe')->name('cafe');
Route::get('cafeprime', 'AController@cafeprime')->name('cafeprime');
Route::get('movie', 'AController@movie')->name('movie');
Route::get('movieprime', 'AController@movieprime')->name('movieprime');
Route::get('amusement', 'AController@amusement')->name('amusement');
Route::get('amusementprime', 'AController@amusementprime')->name('amusementprime');
Route::get('shopping', 'AController@shopping')->name('shopping');
Route::get('shoppingprime', 'AController@shoppingprime')->name('shoppingprime');

Route::get('workinfo', 'AController@workinfo')->name('workinfo');



Route::get('/banana', 'MainController@banana')->name('banana');
Route::get('/match', 'MainController@match')->name('match');
Route::get('/shootingGame', 'MainController@shootingGame')->name('shootingGame');
Route::get('/quiz', 'MainController@quiz')->name('quiz');
Route::get('/mihon', 'MainController@mihon')->name('mihon');
Route::get('/shooting', 'MainController@shooting')->name('shooting');



Route::get('index', 'ContentsController@index')->name('contents.index');

Route::get('/sakusei', 'QuizController@sakusei')->name('sakusei');
Route::get('/answer', 'QuizController@answer')->name('answer');
Route::post('quiz.store', 'QuizController@store')->name('quiz.store');
Route::post('quiz.answerinput', 'QuizController@answerinput')->name('quiz.answerinput');

Route::get('index', 'ContentsController@index')->name('contents.index');

// branch
Route::get('contents.branch', 'ContentsController@branch')->name('contents.branch');
// fukuoka
Route::get('fukuoka', 'ContentsController@fukuoka')->name('contents.fukuoka');
Route::post('fukuokafavorite', 'UsersController@fukuokafavorite')->name('fukuokafavorite');
Route::post('fukuokaunfavorite', 'UsersController@fukuokaunfavorite')->name('fukuokaunfavorite');
// tokyo
Route::get('tokyo', 'ContentsController@tokyo')->name('contents.tokyo');
Route::post('tokyofavorite', 'UsersController@tokyofavorite')->name('tokyofavorite');
Route::post('tokyounfavorite', 'UsersController@tokyounfavorite')->name('tokyounfavorite');
// osaka
Route::get('osaka', 'ContentsController@osaka')->name('contents.osaka');
Route::post('osakafavorite', 'UsersController@osakafavorite')->name('osakafavorite');
Route::post('osakaunfavorite', 'UsersController@osakaunfavorite')->name('osakaunfavorite');
// Route::group(['prefix' => 'branches/fukuoka'], function () {
//         Route::post('fukuokafavorite', 'BranchfavoritesController@store')->name('fukuokafavorite');
//         Route::delete('unfavorite', 'FavoriteController@destroy')->name('micropost.unfavorite');
//     });
Route::get('okinawa', 'ContentsController@okinawa')->name('contents.okinawa');

// Route::get('tokyo', 'ContentsController@tokyo')->name('contents.tokyo');
// // Route::get('osaka', 'ContentsController@osaka')->name('contents.osaka');
// Route::get('fukuoka', 'ContentsController@fukuoka')->name('contents.fukuoka');
// Route::get('okinawa', 'ContentsController@okinawa')->name('contents.okinawa');

Route::get('gallery', 'ContentsController@gallery')->name('contents.gallery');

Route::post('contents.storeF', 'ContentsController@storeF')->name('contents.storeF');
Route::post('contents.storeT', 'ContentsController@storeT')->name('contents.storeT');
Route::post('contents.storeO', 'ContentsController@storeO')->name('contents.storeO');

//branch favorite
        Route::post('branchfavorite/{id}', 'BranchfavoritesController@store')->name('branchfavorite');
        Route::delete('unfavorite', 'BranchfavoritesController@destroy')->name('micropost.unfavorite');
   

Route::get('users.show', 'UsersController@show')->name('users.show');

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



//isPrime
Route::get('member', 'MainController@isPrime')->name('member');

Route::get('rakutenPrime', 'MainController@rakutenPrime')->name('rakutenPrime');
Route::get('amusePrime', 'MainController@amusePrime')->name('amusePrime');
Route::get('shoppingPrime', 'MainController@shoppingPrime')->name('shoppingPrime');
Route::get('cafePrime', 'MainController@cafePrime')->name('cafePrime');
Route::get('moviePrime', 'MainController@moviePrime')->name('moviePrime');

Route::post('welcomePrime', 'MainController@welcomePrime')->name('welcomePrime');

Route::get('soloquiz.sakusei', 'SoloquizController@sakusei')->name('soloquiz.sakusei');
Route::get('soloquiz.answer', 'SoloquizController@answer')->name('soloquiz.answer');
Route::post('soloquiz.store', 'SoloquizController@store')->name('soloquiz.store');
Route::post('soloquiz.answerinput', 'SoloquizController@answerinput')->name('soloquiz.answerinput');

Route::get('newquiz', 'AController@newquiz')->name('newquiz');
Route::get('yontaku', 'AController@yontaku')->name('yontaku');
Route::get('hirayama', 'AController@hirayama')->name('hirayama');
Route::get('soy', 'AController@soy')->name('soy');



