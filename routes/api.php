<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {
  Route::group(['prefix' => 'user'], function () {
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
  });

  Route::get('book', 'BookController@book');
});

Route::group(['prefix' => 'v1', 'middleware' => ['jwt.verify']], function () {
  Route::get('bookall', 'BookController@bookAuth');
  Route::get('user', 'UserController@getAuthenticatedUser');
});
