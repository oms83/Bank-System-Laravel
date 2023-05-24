<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BankAccountController;

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


Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');
Route::get('/profile',[ProfileController::class,'index'])->name('profile');

// //  str, array
Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/accounts',[BankAccountController::class,'index'])->name('accounts');
