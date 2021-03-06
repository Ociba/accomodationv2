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
Route::group(['prefix'=>'category', 'middleware'=>['auth']],function(){
    Route::get('/', 'CategoryController@index'); 
    Route::get('/create-category', 'CategoryController@createCategory');
    Route::get('/edit-category/{category_id}', 'CategoryController@editCategory');
    Route::get('/update-category/{category_id}', 'CategoryController@updateCategory');
    Route::get('/delete-category/{category_id}', 'CategoryController@deleteCategory');
});
