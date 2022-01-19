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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/karol/index', 'App\Http\Controllers\PageController@karolIndex')->name('karolIndex');
Route::get('/karol/market', 'App\Http\Controllers\PageController@karolMarket')->name('karolMarket');
Route::get('/karol/transactions', 'App\Http\Controllers\PageController@karolTransactions')->name('karolTransactions');
Route::get('/karol/wallet', 'App\Http\Controllers\PageController@karolWallet')->name('karolWallet');
Route::get('/testcoin', 'App\Http\Controllers\CurrencyController@testCoin')->name('testCoin');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
