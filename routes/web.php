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

Route::get('/', 'CustomAuth\LoginController@showLoginForm')->name('customLogin');
Route::post('/customLogin', 'CustomAuth\LoginController@login');
Route::post('/logout', 'CustomAuth\LoginController@logout');
Route::get('/customRegister', 'CustomAuth\RegisterController@showRegistrationForm');
Route::post('/customRegister', 'CustomAuth\RegisterController@register');

Route::post('/password/email', 'CustomAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'CustomAuth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'CustomAuth\ResetPasswordController@reset')->name('password.update');
Route::get('/password/reset', 'CustomAuth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/blog', 'HomeController@blog');
Route::get('/contact', 'HomeController@contact');
Route::get('/cart', 'HomeController@cart');
Route::get('/tyres', 'HomeController@tyres');


Route::get('/searchByCar', 'SearchByCarController@searchByCar');
Route::post('/searchByCar/addCar', 'SearchByCarController@addCar');
Route::get('/servicesAndRepair/{id}', 'SearchByCarController@servicesAndRepair');
Route::get('/searchCar', 'SearchByCarController@searchCar');


Route::get('/google/redirect', 'SocialAuthGoogleController@redirect');
Route::get('/google/callback', 'SocialAuthGoogleController@callback');

Route::get('/facebook/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/facebook/callback', 'SocialAuthFacebookController@callback');
