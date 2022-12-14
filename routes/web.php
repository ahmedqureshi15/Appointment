<?php

use App\Http\Controllers\Api\OnBoardingController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index')->middleware('verified');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('appoinment-prefences', 'UserController@appoinmentPrefences')->middleware('auth:web');


Route::resource('users', 'UserController')->middleware('auth:web');
// Route::get('stripe', [ 'as' => 'users.stripe', 'uses' => 'StripePaymentController@stripe']);
// Route::get('stripe', [ 'as' => 'users.stripe', 'uses' => 'StripePaymentController@stripePost'])->name('stripe.post');


Route::get('stripe', 'StripePaymentController@stripe');
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post');

Route::get('on-boarding', [OnBoardingController::class, 'index']);
Route::post('store-form', [OnBoardingController::class, 'store']);
