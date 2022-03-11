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

Route::prefix('produce')->group(function() { 
    Route::get('/', 'ProduceController@index');
    Route::get('/produce-available', 'ProduceController@availableProduce');
    Route::get('/produce-taken', 'ProduceController@takenProduce'); 
    Route::get('/my-produce', 'ProduceController@myProduce');
    Route::post('/save-produce', 'ProduceController@saveProduceInfo');
    Route::get('/save-discount/{produce_id}', 'ProduceController@saveDiscount');
    Route::get('/add-discount-form/{produce_id}', 'ProduceController@AddDiscountForm');
    Route::get('/edit-produce-form/{produce_id}', 'ProduceController@editProduce'); 
    Route::get('/update-produce-info/{produce_id}', 'ProduceController@updateProduce'); 
    Route::get('/mark-produce-as-sold/{produce_id}', 'ProduceController@markProduceAsSold');
    Route::get('/delete-produce/{produce_id}', 'ProduceController@deleteProduce');
});
