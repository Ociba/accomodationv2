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

Route::prefix('supermarketitemcategory')->group(function() {  
    Route::get('/', 'SuperMarketItemCategoryController@index'); 
    Route::get('/save-category', 'SuperMarketItemCategoryController@createCategory');
    Route::get('/delete/{id}', 'SuperMarketItemCategoryController@deleteCategory');
    Route::get('/edit/{id}', 'SuperMarketItemCategoryController@edit');
    Route::get('/update/{id}', 'SuperMarketItemCategoryController@update');
});
