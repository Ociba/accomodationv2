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
});
