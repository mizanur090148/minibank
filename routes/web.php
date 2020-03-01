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

Route::group(['middleware' => 'guest'], function() {
	Route::get('/', 'AuthController@login');
	Route::get('/signup', 'AuthController@signupForm');
	Route::post('/signup-post', 'AuthController@signupPost');

	Route::get('/login', 'AuthController@login')->name('login');
	Route::post('/login-post', 'AuthController@loginPost');	
});


Route::group(['middleware' => ['web', 'auth']], function() {
	Route::get('/dashboard', 'TransactionProfileController@index');
	Route::get('/transaction-profiles', 'TransactionProfileController@index');
	Route::get('/transaction-profiles/create', 'TransactionProfileController@create');
	Route::post('/transaction-profiles', 'TransactionProfileController@store');	
	Route::get('/transaction-profiles/{id}/edit', 'TransactionProfileController@edit');	
	Route::put('/transaction-profiles/{id}', 'TransactionProfileController@update');
	Route::get('/transaction-profiles/{id}', 'TransactionProfileController@show');
	Route::get('/delete-transaction-profiles/{id}', 'TransactionProfileController@destroy');
	Route::get('/search-transaction-profile', 'TransactionProfileController@index');

	Route::get('/account-info', 'AccountController@changeAccountInfo');
	Route::post('/change-account-info-post', 'AccountController@changeAccountInfoPost');
	Route::post('/change-password-post', 'AuthController@changePasswordPost');
	Route::get('/logout', 'AuthController@logout');

});