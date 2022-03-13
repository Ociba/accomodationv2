<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::Class,'getWelcomePage'])->name('Accomodation');
Route::get('/dashboard',[DashboardController::Class,'getDashboard']);
Route::get('/save-client-information',[CheckoutController::Class,'validateSupermarketUser']);


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/login-now', function() { return view('login-page');});
Route::get('/register-now', function() { return view('register-page');});  
Route::get('/cart',[CartController::Class,'getCart'])->name('Cart'); 
Route::get('/checkout',[CartController::Class,'getCheckout'])->name('Checkout');
Route::get('/order-list',[CartController::Class,'OrderList'])->name('Place Order');
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('/produce-registration', function(){ return view('produce-registration');}); 
Route::post('/create-accomodation-account',[AuthenticationController::Class, 'registerAccomodationUser']);
Route::post('/create-prouduce-account',[AuthenticationController::Class, 'registerProduceUser']);


Route::get('/pay-with-mtn',[PaymentController::Class,'payWithMtn']);
Route::get('/pay-with-airtel',[PaymentController::Class,'payWithAirtel']);
