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
Route::group(['prefix'=>'users', 'middleware'=>['auth']],function(){ 
    Route::get('/', 'UsersController@index');
    Route::post('/create-user','UsersController@validateUser');
    Route::get('/suspend-user/{user_id}','UsersController@suspendUser');
    Route::get('/activate-user/{user_id}','UsersController@activateUser');
    Route::get('/delete-user/{user_id}','UsersController@deleteUser');
});
