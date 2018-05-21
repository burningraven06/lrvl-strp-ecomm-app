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
  'as' => 'productIndexRoute',
  // 'middleware' => 'guest'
]);

Route::get('/add-to-cart/{id}', [
  'uses' => 'ProductController@getAddToCart',
  'as' => 'productAddToCartRoute'
]);

Route::get('/add-to-cart/increase/{id}', [
  'uses' => 'ProductController@getCartProductIncreaseByOne',
  'as' => 'increaseCartProductByOne'
]);

Route::get('/add-to-cart/decrease/{id}', [
  'uses' => 'ProductController@getCartProductReduceByOne',
  'as' => 'reduceCartProductByOne'
]);

Route::get('/add-to-cart/remove/{id}', [
  'uses' => 'ProductController@getRemoveItemCompletely',
  'as' => 'removeCartItem'
]);

Route::get('/shopping-cart', [
  'uses' => 'ProductController@getShowCart',
  'as' => 'productShowCartRoute'
]);

Route::get('/checkout', [
  'uses' => 'ProductController@getCheckout',
  'as' => 'checkoutRoute',
  'middleware' => 'auth'
]);

Route::post('/checkout', [
  'uses' => 'ProductController@postCheckout',
  'as' => 'postCheckoutRoute',
  'middleware' =>'auth'
]);





Route::group(['prefix' => 'user'], function(){

  Route::group(['middleware' => 'guest'], function(){

    Route::get('/signup', [
      'uses' => 'UserController@getSignup',
      'as' => 'userGetSignupRoute',
    ]);

    Route::post('/signup', [
      'uses' => 'UserController@postSignup',
      'as'=>'userPostSignupRoute',
    ]);

    Route::get('/signin', [
      'uses' => 'UserController@getSignin',
      'as' => 'userGetSigninRoute',
    ]);

    Route::post('/signin', [
      'uses' => 'UserController@postSignin',
      'as' => 'userPostSigninRoute',
    ]);

  });

  Route::group(['middleware' => 'auth'], function(){

    Route::get('/signout', [
      'uses' => 'UserController@getSignout',
      'as' => 'userPostSignoutRoute',
      'middleware' => 'auth'
    ]);

    Route::get('/profile', [
      'uses' => "UserController@getUserProfile",
      'as' => 'userProfileRoute',
      'middleware' => 'auth'
    ]);

  });



});
