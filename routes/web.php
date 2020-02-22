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
	Route::get('/', 'AuthController@home');
	Route::get('/signup', 'AuthController@signupForm');
	Route::post('/signup-post', 'AuthController@signupPost');

	Route::get('/login', 'AuthController@login')->name('login');
	Route::post('/login-post', 'AuthController@loginPost');	
});


Route::group(['middleware' => ['web', 'auth']], function() {
	Route::get('/dashboard', 'DashboardController@dashboard');

	Route::get('/transactions', 'TransactionController@all');
	Route::get('/transaction/create', 'TransactionController@create');
	Route::post('/transaction-post', 'TransactionController@transactionPost');

	Route::get('/transaction-profiles', 'TransactionProfileController@index');
	Route::get('/transaction-profiles/create', 'TransactionProfileController@create');
	Route::post('/transaction-profiles', 'TransactionProfileController@store');	
	Route::get('/transaction-profiles/{id}/edit', 'TransactionProfileController@edit');	
	Route::put('/transaction-profiles/{id}', 'TransactionProfileController@update');
	Route::get('/delete-transaction-profiles/{id}', 'TransactionProfileController@destroy');

	Route::get('/account-info', 'DepositController@accountInfo');
	Route::get('/change-account-info', 'AccountController@changeAccountInfo');
	Route::post('/change-account-info-post', 'AccountController@changeAccountInfoPost');
	Route::post('/change-password-post', 'AuthController@changePasswordPost');
	Route::get('/logout', 'AuthController@logout');

});