<?php

use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\CartController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\SubscribersNotificationController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\AjaxContactController;
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
Route::get('/save-client-information',[CheckoutController::Class,'validateSupermarketUser']);

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::get('/login-now', function() { return view('auth.login');});
Route::get('/register-now', function() { return view('register-page');}); 
Route::get('/checkout',[CartController::Class,'getCheckout'])->name('Checkout');
Route::get('/produce-registration', function(){ return view('produce-registration');}); 
Route::post('/create-accomodation-account',[AuthenticationController::Class, 'registerAccomodationUser']);
Route::post('/create-prouduce-account',[AuthenticationController::Class, 'registerProduceUser']);
Route::get('/save-order',[CheckoutController::Class, 'createCheckoutOrder']); 
Route::get('/profile-form',[CheckoutController::Class, 'updateProfileForm'])->name('Profile Update');
Route::get('/update-profile',[CheckoutController::Class, 'UpdateProfile']);

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('/store', [HomeController::class, 'addToCart'])->name('cart.store');
Route::get('update', [CartController::class, 'updateCart'])->name('cart.update');
 Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['middleware' => ['auth']], function () {
Route::get('/dashboard',[DashboardController::Class,'getDashboard']);
Route::get('/place-order-now',[CartController::Class,'OrderList'])->name('Place Order');
Route::get('/logout',[AuthenticationController::Class, 'logoutUser']);
Route::get('/pay-subscription',[PaymentController::Class,'payWithMobileMoney']);
Route::get('send/{post_id}', [SubscribersNotificationController::Class,'store']);
Route::get('/get-post', [SubscribersNotificationController::Class,'getPosts']); 
Route::get('/post/{post_id}', [SubscribersNotificationController::Class,'postform']); 
Route::get('/users-types',[PermissionsController::Class,'getUsersTypes']); 
Route::get('/assign-or-remove-permission/{type_id}',[PermissionsController::Class,'selectUsertypePermissions']);
Route::get('/add-permission/{type_id}',[PermissionsController::Class,'getPermissions']);  
Route::get('/assign-permission/{type_id}',[PermissionsController::Class,'assignPermissions']);  
Route::get('/unassign-permission/{type_id}',[PermissionsController::Class,'unsignPermission']);
Route::get('/make-payments',[PaymentController::Class,'makeDeposit']);

});
Route::get('ajax-contact-form', [AjaxContactController::class, 'index']);
Route::post('savedata',  [AjaxContactController::class,'saveData']);



