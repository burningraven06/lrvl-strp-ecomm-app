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

Route::get('/', [
  'uses' => 'ProductController@getIndex',
  'as' => 'productIndexRoute'
]);

Route::get('/signup', [
  'uses' => 'UserController@getSignup',
  'as' => 'userGetSignupRoute'
]);

Route::post('/signup', [
  'uses' => 'UserController@postSignup',
  'as'=>'userPostSignupRoute'
]);

Route::get('/signin', [
  'uses' => 'UserController@getSignin',
  'as' => 'userGetSigninRoute'
]);

Route::post('/signin', [
  'uses' => 'UserController@postSignin',
  'as' => 'userPostSigninRoute'
]);

Route::get('/signout', [
  'uses' => 'UserController@postSignout',
  'as' => 'userPostSignoutRoute'
]);

Route::get('/user', [
  'uses' => "UserController@getUserProfile",
  'as' => 'userProfileRoute'
]);
