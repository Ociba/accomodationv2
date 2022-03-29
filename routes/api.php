<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyApiController;
use App\Http\Resources\AccomodationPropertyResource;
use App\Http\Resources\ProduceResource;
use App\Http\Controllers\ProduceApiController;
use App\Http\Resources\SupermarketResource;
use App\Http\Controllers\SupermarketApiController;
use App\Http\Resources\EquipmentResource;
use App\Http\Controllers\EquipmentApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/accomodation-and-property',[PropertyApiController::Class,'getAccomodationAndPropertyDetails']);
Route::get('/get-produce',[ProduceApiController::Class,'getProduceInfo']);
Route::get('/get-supermarket-items',[SupermarketApiController::Class,'getSupermarketItems']);
Route::get('/get-equipment-items',[EquipmentApiController::Class,'getEquipmentInfo']);

