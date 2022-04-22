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

Route::prefix('location')->group(function() {
    Route::get('/', 'LocationController@index'); 
    Route::get('/add-location','LocationController@createLocation');
    Route::get('/edit-location/{location_id}','LocationController@editLocation');
    Route::get('/update-location/{location_id}','LocationController@updateLocation');
    Route::get('/delete-location/{location_id}','LocationController@deleteLocation');
});
