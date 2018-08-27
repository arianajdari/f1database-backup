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

Route::get('/', function () { return view('homepage.index'); });

Route::get('/register', 'UserControllers\UserRegistrationController@index');
Route::post('/register', 'UserControllers\UserRegistrationController@register');

Route::get('/login', 'UserControllers\UserLoginController@index');
Route::post('/login', 'UserControllers\UserLoginController@login');

Route::get('/forgot', 'UserControllers\UserForgotController@index');
Route::post('/forgot', 'UserControllers\UserForgotController@sendEmail');

Route::get('/reset/{token}', 'UserControllers\UserResetController@index')->middleware('token');
Route::post('/reset', 'UserControllers\UserResetController@reset')->middleware('token.expired');

Route::group(['middleware' => ['auth']], function() {
	Route::get('/dashboard', 'DashboardControllers\DashboardController@index');

	Route::post('/logout', 'DashboardUserControllers\UserLogoutController@logout');
});


