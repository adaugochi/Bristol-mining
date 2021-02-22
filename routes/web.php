<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/deposits', 'TransactionController@deposits')->name('deposits');
    Route::get('/deposits-history', 'TransactionController@depositsHistory')->name('deposits.history');
    Route::get('/transactions', 'TransactionController@all')->name('transactions');
    Route::get('/income', 'TransactionController@income')->name('income');
    Route::get('/referrals',    'ReferralController@index')->name('referrals');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/profile', 'HomeController@profileUpdate')->name('profile');
    Route::get('/reviews', 'ReviewController@index')->name('reviews');

    // Route::get('/deposit', 'HomeController@deposit')->name('deposit');
    Route::post('/deposit', 'TransactionController@deposit')->name('deposit');
    Route::get('/deposit/payment/{id}', 'TransactionController@payment')->name('payment');
    Route::post('/deposit/payment/proof', 'TransactionController@proof')->name('proof');
    Route::get('/withdrawal', 'TransactionController@withdrawal')->name('withdrawal');
    Route::post('/withdrawal', 'TransactionController@withdrawalRequest')->name('withdrawal');

    Route::get('/logout', 'HomeController@logout')->name('logout'); 
});

