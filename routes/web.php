<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CardTypeController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BankLocationController;
use App\Http\Controllers\CardTransactionController;
use App\Http\Controllers\SandBox\SmsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// it includes  a register|login|logout routes
Auth::routes(); 

// str, str
Route::resource('/blog', PostsController::class);


// go to login screen from post/blog page
Route::get('/login', static function () {
    return view('auth.customer.login');
})->name("login");


// back to login screen from bank dashboard page
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/reset/account', static function () {
    return view('auth.customer.reset_password');
})->name("reset_account");



//SandBox Section
Route::get('/sandbox/send/sms', static function () {
    return view('sandbox.sms');
})->name("send_sms_sandbox");
Route::post('/sandbox/process/sms',[SmsController::class,'processMessage'])->name('process_sms_sandbox');

// //  str, array
Route::get('/', [PagesController::class, 'index'])->name('index');


Route::group(array('middleware' => 'auth'), static function(){

    Route::get('/dashboard',[DashBoardController::class,'index']);
    Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');

    //Bank Account Management
    Route::get('/accounts',[BankAccountController::class,'index'])->name('accounts');
    Route::post('/account',[BankAccountController::class,'store'])->name('account');
    Route::post('/account/update/{id}',[BankAccountController::class,'update'])->name('update_account');
    Route::get('/account/delete/{id}',[BankAccountController::class,'destory'])->name('delete_account');
    Route::get('/account/restore/{id}',[BankAccountController::class,'restore'])->name('restore_account');

    Route::get('/account/transactions/{id}',[BankAccountController::class,'transactions'])->name('account_history');
    Route::get('/transactions',[BankAccountController::class,'all_transactions'])->name('all_transactions');
    Route::post('/bank/transaction',[BankAccountController::class,'storeTransaction'])->name('add_bank_transaction');


    //Cards Management
    Route::get('/cards',[CardController::class,'index'])->name('cards');
    Route::post('/card',[CardController::class,'store'])->name('card');
    Route::get('/card/transactions/{id}',[CardTransactionController::class,'show'])->name('card_transactions');
    Route::post('/card/update/{id}',[CardController::class,'update'])->name('update_card');
    Route::get('/card/delete/{id}',[CardController::class,'destory'])->name('delete_card');
    Route::get('/card/restore/{id}',[CardController::class,'restore'])->name('restore_card');
    Route::post('/card/ransaction',[CardTransactionController::class,'storeTransaction'])->name('add_card_transaction');

    //Profile Management
    Route::get('/profile',[ProfileController::class,'index'])->name('profile');

    //Setting Management
    Route::get('/settings',[SettingsController::class,'index'])->name('settings');
    Route::post('/settings',[SettingsController::class,'update'])->name('update_settings');


    //Inbox Messages
    Route::get('/inbox',[MessageController::class,'index'])->name('inbox');
    Route::get('/inbox/{id}',[MessageController::class,'show'])->name('read_message');
    Route::post('/send/message',[MessageController::class,'store'])->name('send_message');


    //User Account Management
    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::get('/user/delete/{id}',[UserController::class,'destory'])->name('delete_user');
    Route::get('/user/restore/{id}',[UserController::class,'restore'])->name('restore_user');
    Route::post('/user/save',[UserController::class,'store'])->name('save_user');
    Route::post('/user/update/{id}',[UserController::class,'update'])->name('edit_user');
    Route::post('/user/password/update/{id}',[UserController::class,'change_password'])->name('change_password');


    //Currencies
    Route::get('/currencies',[CurrencyController::class,'index'])->name('currencies');
    Route::post('/currency/save',[CurrencyController::class,'store'])->name('save_currency');
    Route::post('/currency/update/{id}',[CurrencyController::class,'update'])->name('edit_currency');

    //Card Types
    Route::get('/card/types',[CardTypeController::class,'index'])->name('card_types');
    Route::post('/card/types/save',[CardTypeController::class,'store'])->name('save_card_type');
    Route::post('/card/types/update/{id}',[CardTypeController::class,'update'])->name('edit_card_type');

    //Banks
    Route::get('/banks',[BankController::class,'index'])->name('banks');
    Route::post('/bank/save',[BankController::class,'store'])->name('save_bank');
    Route::post('/bank/update/{id}',[BankController::class,'update'])->name('edit_bank');
    Route::get('/bank/delete/{id}',[BankController::class,'destory'])->name('delete_bank');
    Route::get('/bank/restore/{id}',[BankController::class,'restore'])->name('restore_bank');


    //Bank Locations
    Route::get('/bank/{id}/locations',[BankLocationController::class,'index'])->name('bank_locations');
    Route::post('/bank/location/save',[BankLocationController::class,'store'])->name('save_bank_location');
    Route::post('/bank/location/update/{id}',[BankLocationController::class,'update'])->name('edit_bank_location');
    Route::get('/bank/location/delete/{id}',[BankLocationController::class,'destory'])->name('delete_bank_location');
    Route::get('/bank/location/restore/{id}',[BankLocationController::class,'restore'])->name('restore_bank_location');

});
