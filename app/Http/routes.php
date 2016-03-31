<?php

/*  Route::get('/', function () {
      return view('welcome');
  });
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function() {

  Route::get('/', function () {
    return view('welcome');
  }) -> name('home');

  Route::get('signup', function() {
      return view('signup');
  }) -> name('signup');

  Route::get('signin', function() {
      return view('signin');
  }) -> name('signin');

  Route::get('/dashboard', [
    'uses' => "NewRequestController@getDashboard",
    'as' => 'dashboard',
    'middleware' => 'auth'
  ]);

  Route::post('/signup', [
    'uses' => 'UserController@postSignUp',
    'as' => 'signup'
  ]);

  Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'signin'
  ]);

  Route::get('/signout', [
    'uses' => 'UserController@getSignOut',
    'as' => 'signout'
  ]);

  Route::post('/newRequest', [
    'uses' => 'NewRequestController@postNewRequest',
    'as' => 'newRequest',
    'middleware' => 'auth'
  ]);

  Route::get('/deleteRequest/{newRequest_id}', [
    'uses' => 'newRequestController@getDeleteRequest',
    'as' => 'deleteRequest',
    'middleware' => 'auth'
  ]);

});
