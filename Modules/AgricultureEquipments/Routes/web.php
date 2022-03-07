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

Route::prefix('agricultureequipments')->group(function() {  
    Route::get('/', 'AgricultureEquipmentsController@index');
    Route::get('/equipment-requests-recieved', 'AgricultureEquipmentsController@equipmentReceivedRequests');
    Route::get('/equipments-available', 'AgricultureEquipmentsController@availbleEquipments');
    Route::get('/equipments-taken', 'AgricultureEquipmentsController@equipmentTaken');
});
