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
Route::group(['prefix'=>'agricultureequipments', 'middleware'=>['auth']],function(){ 
    Route::get('/', 'AgricultureEquipmentsController@index');  
    Route::get('/equipment-requests-recieved', 'AgricultureEquipmentsController@equipmentReceivedRequests');
    Route::get('/equipments-available', 'AgricultureEquipmentsController@availbleEquipments');
    Route::get('/equipments-taken', 'AgricultureEquipmentsController@equipmentTaken');

    Route::post('/save-equipment', 'AgricultureEquipmentsController@validateEquipment');
    Route::get('/edit-equipment/{equipment_id}', 'AgricultureEquipmentsController@editEquipment');
    Route::get('/update-equipment/{equipment_id}', 'AgricultureEquipmentsController@updateEquipmentInfo');
    Route::get('/delete-equipment/{equipment_id}', 'AgricultureEquipmentsController@deleteEquipment');
    Route::get('/add-discount/{equipment_id}', 'AgricultureEquipmentsController@addDiscountForm');
    Route::get('/save-discount/{equipment_id}', 'AgricultureEquipmentsController@saveDiscount');
    Route::get('/equipment-delivered/{equipment_id}', 'AgricultureEquipmentsController@markAsEquipmentDelivered');  
    Route::get('/more-on-customer-order/{order_id}', 'AgricultureEquipmentsController@getCustomerOrdersInfo');
    Route::get('/save-order/{order_id}', 'AgricultureEquipmentsController@getUnitPrice');
    Route::get('/print-order/{user_id}', 'AgricultureEquipmentsController@printCustomerOrdersInfoNow');
    Route::get('/mark-customer-order-as-delivered/{order_id}', 'AgricultureEquipmentsController@markOrderAsDelivered');
});
