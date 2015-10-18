<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware'=>'guest'],function(){
	Route::get('auth/signup',[
		'uses'       => 'AuthController@getSignup',
		'as'         => 'auth.signup',
	]);

	Route::get('auth/signin',[
		'uses'       => 'AuthController@getSignin',
		'as'         => 'auth.signin',
	]);

	Route::post('auth/signup',[
		'uses'       => 'AuthController@postSignup',
	]);

	Route::post('auth/signin',[
		'uses'       => 'AuthController@postSignin',
	]);

});

Route::group(['middleware' => 'auth'],function(){
	
	Route::get('/',[
	'uses'       => 'HomeController@index',
	'as'         => 'home',
	]);

	Route::get('/signout',[
	'uses' => 'AuthController@getSignout',
	'as' => 'auth.signout'
	]);

	Route::post('post/create',[
		'uses' => 'PostController@store'
	]);

	Route::get('user/page/{id}',[
		'uses'=> 'UserController@index',
		'as' => 'user.profile'
	]);
});

