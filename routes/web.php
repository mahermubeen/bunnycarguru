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

Route::get('/', 'CustomAuth\LoginController@showLoginForm');
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

Route::get('/google/redirect', 'customAuth\LoginController@redirectToProvider');
Route::get('/google/callback', 'customAuth\LoginController@handleProviderCallback');


Route::get('{provider}/auth/callback', [
    'uses' => 'SocialAuthFacebookController@redirect',
    'as'   => 'socialfb.auth'
]);
Route::get('auth/{provider}/callback', 'SocialAuthFacebookController@redirect');



Route::get('/linkedin/redirect', 'SocialAuthLinkedinController@redirect');
Route::get('/linkedin/callback', 'SocialAuthLinkedinController@callback');

Route::get('/twitter/redirect', 'SocialAuthTwitterController@redirect');
Route::get('/twitter/callback', 'SocialAuthTwitterController@callback');
