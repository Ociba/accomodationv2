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

Route::prefix('property')->group(function() {
    Route::get('/', 'PropertyController@index');
    Route::get('/my-property', 'PropertyController@myProperty'); 
    Route::get('/property-taken', 'PropertyController@propertyTaken'); 
    Route::post('/create-property', 'PropertyController@validateProperty');
    Route::get('/edit/{property_id}', 'PropertyController@editProperty');  
    Route::get('/update-property/{property_id}', 'PropertyController@updateProperty');
    Route::get('/add-discount/{property_id}', 'PropertyController@addDiscountForm');  
    Route::get('/save-discount/{property_id}', 'PropertyController@saveDiscount');  
    Route::get('/delete/{property_id}', 'PropertyController@deleteProperty');
    Route::get('/mark-as-taken/{property_id}', 'PropertyController@updatePropertyStatus');
});
