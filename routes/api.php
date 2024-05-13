<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("myOrders",'usersController@myOrders');
Route::post("allOrders",'usersController@allOrders');
Route::post("getResult",'usersController@getResult');
Route::post("transactions",'usersController@transactions');
Route::post("getUserDetails",'usersController@userDetails');
Route::post("userlogin",'usersController@userlogin');
Route::post("getSponser",'usersController@getSponser');
Route::post("payment",'usersController@payment');
Route::post("getPayments",'usersController@getPayments');
Route::post("submitBet",'usersController@submitBet');
Route::post("updateProfile",'usersController@updateProfile');
Route::post("prevGames",'usersController@prevGames');
Route::post("lastGame",'usersController@lastGame');
Route::post("allGames",'usersController@allGames');
Route::get("getGameId",'usersController@getGameId');
Route::post("userLogout",'usersController@userLogout');
Route::post("cash_payments",'usersController@cash_payments');
Route::post("direct_list",'usersController@direct_list');
Route::post("team_list",'usersController@team_list');
Route::post("withdraw",'usersController@withdraw');
Route::post("withdraws",'usersController@withdraw_details');

Route::post("upi",'usersController@getUpi');
Route::post("getTime",'usersController@getTime');

Route::post("post_swap",'usersController@swap');


Route::get("test",'BinanceController@test');

Route::post("getBalance",'BinanceController@getBalance');
Route::post("usdtBalance",'BinanceController@usdtBalance');
Route::post("getPrice",'BinanceController@getPrice');



Route::post("buyCoin",'BinanceController@buyCoin');
Route::post("sellCoin",'BinanceController@sellCoin');

Route::post("manualBuy",'BinanceController@manualBuy');
Route::post("manualSell",'BinanceController@manualSell');

Route::post("tradeHistory",'BinanceController@tradeHistory');
Route::post("user_register",'usersController@user_register');
Route::post("coinBalance",'usersController@coinBalance');
Route::post("deposit",'BinanceController@deposit');

Route::post("success_url",'BinanceController@success_url');

Route::post("getAssets",'BinanceController@getAssets');

Route::post("recieveCoin",'BinanceController@recieveCoin');

Route::get("posts",'usersController@getPosts');
Route::post("deposit_history",'usersController@deposit_history');

Route::post("check_token",'usersController@check_token');

Route::post("getGasFee",'BinanceController@getGasFee');
Route::post("sendToken",'BinanceController@sendToken');
Route::post("transferToken",'BinanceController@transferToken');


Route::post("crypto_history",'BinanceController@crypto_history');


Route::post("getSymbols",'usersController@getSymbols');

Route::post("forgetPassword",'usersController@forgetPassword');
Route::post("verfiyOtp",'usersController@verfiyOtp');

Route::post("npfPrices",'usersController@npf_prices');

Route::get("usdt_price",'usersController@usdt_price');




Route::get("curl",'usersController@curl');
