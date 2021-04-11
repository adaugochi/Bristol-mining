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

Route::get('/aboutus', function() {
    return view('aboutus');
})->name('aboutus');

Route::get('/pricing', function() {
    return view('pricing');
})->name('pricing');

Route::get('/faq', function() {
    return view('faq');
})->name('faq');

Route::get('/privacy', function() {
    return view('privacy');
})->name('privacy');

Route::get('/cron-interest', 'TransactionController@interest');

Auth::routes(['verify' => true]);

Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');

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
    Route::get('/withdrawal', 'TransactionController@withdrawalRequests')->name('withdrawal');
    Route::post('/withdrawal', 'TransactionController@withdrawalRequest')->name('withdrawal');

    Route::get('/withdrawal-request', 'TransactionController@withdrawalRequests')->name('withdrawal-request');
    Route::post('/withdrawal-request', 'TransactionController@withdrawalRequest')->name('withdrawal-request');
    
    Route::get('/admin-deposits', 'TransactionController@adminDeposits')->name('admin-deposits');
    Route::get('/admin-deposits/confirm', 'TransactionController@adminConfirmDeposits')->name('admin-confirm-deposits');
    Route::get('/admin-users', 'HomeController@getUsers')->name('admin-users');
    
    Route::get('/admin-withdrawal-request', 'TransactionController@adminWithdrawalRequest')->name('admin-withdrawal-request');
    Route::get('/confirm-withdrawal-request', 'TransactionController@adminManageWithdrawal')->name('confirm-withdrawal-request');

    Route::get('/admin-edit-plan/{id}', 'HomeController@editPlan')->name('plan.edit');
    Route::post('/admin-edit-plan', 'HomeController@editPlanSubmit')->name('admin.plan.edit.submit');

    Route::get('/user/delete', 'HomeController@userDelete')->name('user.delete');
    
    Route::get('/admin-get-user-referral/{user_id}', 'HomeController@getUserReferral')->name('admin-get-user-referral');

    Route::get('/logout', 'HomeController@logout')->name('logout'); 
});

