<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses' => 'SiteController@getIndex',
    'as' => 'welcome'
]);

Route::get('/signup', [
    'uses' => 'SiteController@getRegister',
    'as' => 'user.register'
]);

Route::get('/signin', [
    'uses' => 'SiteController@getSignIn',
    'as' => 'user.signin'
]);
Route::post('/register', [
    'uses' => 'UserController@postRegister',
    'as' => 'register'
]);
Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'user.signin'
]);
Route::get('/customer/index', [
    'uses' => 'UserController@getCustomer',
    'as' => 'customer.index',
    'middleware' => 'checkUser'
]);
Route::get('/seller/index', [
    'uses' => 'UserController@getSeller',
    'as' => 'seller.index',
    'middleware' => 'checkUser'
]);
Route::get('/signout', [
    'uses' => 'UserController@getSignOut',
    'as' => 'signout'
]);
