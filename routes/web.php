<?php

use Illuminate\Support\Facades\Auth;
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



Route::group(['middleware' => 'is.admin'], function () {
    Voyager::routes();
    Route::get('/testcoin', 'App\Http\Controllers\CurrencyController@testCoin')->name('testCoin');
});

Route::group(['middleware' => 'is.user'], function () {
    Route::get('/karol/index', 'App\Http\Controllers\PageController@karolIndex')->name('karolIndex');
    Route::get('/karol/market', 'App\Http\Controllers\PageController@karolMarket')->name('karolMarket');
    Route::get('/karol/transactions', 'App\Http\Controllers\OrderController@index')->name('karolTransactions');
    Route::get('/karol/transactions/new', 'App\Http\Controllers\OrderController@add')->name('karolNewTransactions');
    Route::get('/karol/wallet', 'App\Http\Controllers\PageController@karolWallet')->name('karolWallet');
    Route::post('store-order','App\Http\Controllers\OrderController@store');
});

Route::get('/', 'App\Http\Controllers\PageController@index')->name('landing');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
