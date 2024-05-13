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

// vue routes start
Route::get('/', function () {
    return view('welcome');
    // return redirect('admin/login');
});
Route::get('/home', function () {
    return view('welcome');
})->name('user.home');

Route::get('/exchange', function () {
    return view('welcome');
})->name('user.exchange');
Route::get('/trade', function () {
    return view('welcome');
})->name('user.trade');
Route::get('/market', function () {
    return view('welcome');
})->name('user.market');




Route::get('/game', function () {
    return view('welcome');
});
Route::get('/invite', function () {
    return view('welcome');
});
Route::get('/profile', function () {
    return view('welcome');
});
Route::get('/recharge', function () {
    return view('welcome');
});
Route::get('/payment_history', function () {
    return view('welcome');
});
Route::get('/payment', function () {
    return view('welcome');
});
Route::get('/orders', function () {
    return view('welcome');
});
Route::get('/refer', function () {
    return view('welcome');
});
Route::get('/Login', function () {
    return view('welcome');
});
Route::get('/Register', function () {
    return view('welcome');
});
Route::get('/invite_page', function () {
    return view('welcome');
});
Route::get('/edit_profile', function () {
    return view('welcome');
});
Route::get('/cash_payments', function () {
    return view('welcome');
});
Route::get('/transactions', function () {
    return view('welcome');
});
Route::get('/direct_list', function () {
    return view('welcome');
});
Route::get('/team_list', function () {
    return view('welcome');
});
Route::get('/withdraw', function () {
    return view('welcome');
});
Route::get('/withdraw_details', function () {
    return view('welcome');
});
Route::get('/swap', function () {
    return view('welcome');
});
Route::get('/deposit', function () {
    return view('welcome');
});
Route::get('/feed', function () {
    return view('welcome');
});
Route::get('/deposit_history', function () {
    return view('welcome');
});
Route::get('/funding', function () {
    return view('welcome');
});
Route::get('/funding_history/{slug}', function () {
    return view('welcome');
});
Route::get('/recieve', function () {
    return view('welcome');
});
Route::get('/phone_verification', function () {
    return view('welcome');
});
Route::get('/p2p', function () {
    return view('welcome');
});
Route::get('/forget_password', function () {
    return view('welcome');
});

Route::get("test",'BinanceController@test');
Route::get("test_mail",'usersController@test_mail');


Route::get("/admin/login",'usersController@admin_login')->name('admin.login');
Route::post("/admin/user_login",'usersController@user_login')->name('admin.user_login');


// Route::get('/{any}', function () {
//     return view('welcome');
// });

// vue routes end



Auth::routes();


Route::middleware(['auth','is_admin'])->prefix('admin')->group(function(){
    Route::get('home', 'HomeController@adminHome')->name('admin.home');
    Route::get("users",'usersController@users')->name("admin.users");
    Route::get("activeUsers",'usersController@activeUsers')->name("admin.activeUsers");

    Route::get("editUser/{id}",'usersController@editUser')->name("admin.editUser");
    Route::post("updateUser/{id}",'usersController@updateUser')->name("admin.updateUser");

    Route::get("sendEpin/{id}",'usersController@sendEpin')->name("admin.sendEpin");
    Route::post("postEpin/{id}",'usersController@postEpin')->name("admin.postEpin");

    Route::get("games",'usersController@games')->name("admin.games");
    Route::get("transactions",'usersController@all_transactions')->name("admin.transactions");
    
    //user payments
    Route::get("pending_payments",'usersController@pending_payments')->name('admin.pending_payments');
    Route::post("accept_payment",'usersController@accept_payment')->name('admin.accept_payment');
    Route::post("reject_payment",'usersController@reject_payment')->name('admin.reject_payment');

    Route::get("completed_payments",'usersController@completed_payments')->name('admin.completed_payments');
    Route::get("rejected_payments",'usersController@rejected_payments')->name('admin.rejected_payments');

    Route::get("manual_game",'usersController@manual_game')->name('admin.manual_game');
    Route::post("setResult",'usersController@setResult')->name('admin.setResult');

    Route::get("pending_withdraw",'usersController@pending_withdraw')->name('admin.pending_withdraw');
    Route::get("completed_withdraw",'usersController@completed_withdraw')->name('admin.completed_withdraw');
    Route::get("rejected_withdraw",'usersController@rejected_withdraw')->name('admin.rejected_withdraw');
    Route::post("acceptWd",'usersController@acceptWd')->name('admin.acceptWd');
    Route::post("rejectWd",'usersController@rejectWd')->name('admin.rejectWd');

    Route::get("add_upi",'usersController@add_upi')->name('admin.add_upi');
    Route::post("store_upi",'usersController@store_upi')->name('admin.store_upi');

    Route::get("posts",'usersController@posts')->name('admin.posts');
    Route::get("add_post",'usersController@add_post')->name('admin.add_post');
    Route::get("edit_post/{id}",'usersController@edit_post')->name('admin.edit_post');
    Route::get("delete_post/{id}",'usersController@delete_post')->name('admin.delete_post');
    Route::post("store_post",'usersController@store_post')->name('admin.store_post');
    Route::post("update_post/{id}",'usersController@update_post')->name('admin.update_post');

    Route::get("coins",'usersController@coins')->name('admin.coins');
    Route::get("add_coin",'usersController@add_coin')->name('admin.add_coin');
    Route::get("edit_coin/{id}",'usersController@edit_coin')->name('admin.edit_coin');
    Route::get("delete_coin/{id}",'usersController@delete_coin')->name('admin.delete_coin');
    Route::post("store_coin",'usersController@store_coin')->name('admin.store_coin');
    Route::post("update_coin/{id}",'usersController@update_coin')->name('admin.update_coin');

    Route::get("assets",'usersController@assets')->name('admin.assets');
    Route::get("add_asset",'usersController@add_asset')->name('admin.add_asset');
    Route::get("edit_asset/{id}",'usersController@edit_asset')->name('admin.edit_asset');
    Route::get("delete_asset/{id}",'usersController@delete_asset')->name('admin.delete_asset');
    Route::post("store_asset",'usersController@store_asset')->name('admin.store_asset');
    Route::post("update_asset/{id}",'usersController@update_asset')->name('admin.update_asset');

    Route::get("price",'HomeController@price')->name('admin.price');
    Route::post("store_price",'HomeController@store_price')->name('admin.store_price');

    Route::get("usdt_price",'HomeController@usdt_price')->name('admin.usdt_price');
    Route::post("store_usdtPrice",'HomeController@store_usdtPrice')->name('admin.store_usdtPrice');


    Route::get("all_trades",'BinanceController@all_trades')->name('admin.trades');

    Route::post('admin_logout', 'HomeController@logout')->name('admin.logout');

});



// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
