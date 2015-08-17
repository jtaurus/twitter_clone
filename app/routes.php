<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Home page
Route::get('/', ['as' => 'homepage', 'uses' => 'HomeController@display_homepage']);

// View users profile
Route::get('/user/{username}', ['as' => 'user_profile', 'uses' => 'UserController@display_user_profile']);

// Signup:
Route::get('/signup', ['as' => 'signup_page', 'uses' => 'UserController@display_signup_page']);

Route::post('/signup', ['uses' => 'UserController@create_user']);

// Login:

Route::get('/login', ['as' => 'login_page', 'uses' => 'UserController@display_login_page']);

Route::post('/login', ['as' => 'login_post', 'uses' => 'UserController@log_in']);

// Logout:

Route::get('/logout', ['as' => 'logout', 'uses' => 'UserController@logout']);

// Message posting:

Route::post('/user/{username}/post', ['as' => 'post_message', 'uses' => 'UserController@post_message']);