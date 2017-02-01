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

Route::get('/', function () {
    return view('index');
});

// public
Route::get('/', 'PublicController@home');
Route::get('/pemira/{id}/details', 'PublicController@details');

//vote
Route::get('/vote', 'VoteController@vote');
Route::post('/vote', 'VoteController@storeVote');
Route::get('/vote/thankyou', 'VoteController@thankyouVote');

// Route::group(['middleware' => 'voter'], function(){
//   Route::get('/vote', 'VoterController@vote');
// });


// panitia
Route::get('/login', 'PanitiaController@login');
Route::get('/input', 'PanitiaController@input');
Route::get('/list', 'PanitiaController@list');
Route::get('/pemira/{id}/view', 'PanitiaController@view');

//pemira
Route::get('/pemira/{id}/edit', 'PanitiaController@edit');
Route::post('/input', 'PemiraController@store');
Route::put('/pemira/{id}', 'PemiraController@update');
Route::delete('/pemira/{id}', 'PemiraController@destroy');

//register
// Route::get('/register', 'RegisterController@register');
Route::post('/register', 'RegisterController@createUser');

//login
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

Route::get('/test', 'PemiraController@test');

// Auth::routes();
//
// Route::get('/home', 'HomeController@index');
