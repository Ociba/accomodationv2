<?php

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
Route::prefix('supermarket')->group(function() {
    Route::get('/', 'SuperMarketController@index');
});
Route::group(['prefix'=>'supermarket', 'middleware'=>['auth']],function(){ 
    Route::get('/supermaket-items', 'SuperMarketController@getSupermarketItems');
    Route::get('/supermarkets-orders', 'SuperMarketController@getSupermarketCustomerOrders');
    Route::get('/supermarket-order-summary', 'SuperMarketController@getSupermarketCustomerOrdersSummary'); 
    Route::post('/save-item', 'SuperMarketController@saveItem');
    Route::get('/edit/{item_id}', 'SuperMarketController@editSupermarketItems');
    Route::get('/delete/{item_id}', 'SuperMarketController@deleteItem');
    Route::get('/update-item/{item_id}', 'SuperMarketController@updateItem');
    Route::get('/add-discount/{item_id}', 'SuperMarketController@addDiscountForm');  
    Route::get('/create-discount/{item_id}', 'SuperMarketController@saveDiscount');
    Route::get('/customer-order', 'SuperMarketController@getCustomerOrdersSummary');
    Route::get('/more-on-customer-order/{order_id}', 'SuperMarketController@getCustomerOrdersInfo'); 
    Route::get('/mark-customer-order-as-delivered/{order_id}', 'SuperMarketController@markOrderAsDelivered'); 
    Route::get('/mark-as-seen/{order_id}', 'SuperMarketController@getUnitPrice');
    Route::get('/print-order/{order_id}', 'SuperMarketController@printCustomerOrdersInfoNow');
});
