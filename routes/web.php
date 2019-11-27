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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/custormer/list', 'customerController@index');
Route::get('/custormer/insert', 'customerController@addcustomer');
Route::post('/custormer/save', 'customerController@store');
Route::get('/custormer/view/{id}', 'customerController@view');
Route::post('custormer/view/back_to_customer', 'customerController@backcustormer');
Route::get('/custormer/edit/{id}', 'customerController@edit');
Route::post('/custormer/edit/update/{id}', 'customerController@update');
Route::get('/custormer/delete', 'customerController@delete');

Route::get('/qutation/list', 'qutationController@index');
Route::get('/qutation/create', 'qutationController@create');

Route::get('/delivery/list', 'deliveryController@index');
Route::get('/delivery/create', 'deliveryController@create');
Route::post('/delivery/savebill', 'deliveryController@store');
Route::get('/delivery/view/{id}', 'deliveryController@view');
Route::get('/delivery/view/printpreview', 'deliveryController@index');


   Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
   Route::post('login', 'Auth\LoginController@login');
   Route::post('logout', 'Auth\LoginController@logout')->name('logout');
     
   // Registration Routes...
   Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
   Route::post('register', 'Auth\RegisterController@register');
   // Password Reset Routes...
   Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
   Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
   Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
   Route::post('password/reset', 'Auth\ResetPasswordController@reset');
