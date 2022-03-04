<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/login-now', function() { return view('login-page');});
Route::get('/register-now', function() { return view('register-page');});  
Route::get('/cart',[CartController::Class,'getCart'])->name('Cart'); 
Route::get('/checkout',[CartController::Class,'getCheckout'])->name('Checkout');
Route::get('/order-list',[CartController::Class,'OrderList'])->name('Place Order');
