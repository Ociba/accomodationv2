<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supermarket;
use App\Http\Resources\SupermarketResource;

class SupermarketApiController extends Controller
{
    //This function returns produce
    public function getSupermarketItems(){
        $get_supermarket_items =SupermarketResource::collection(Supermarket::where('status','active')->get());
        return response()->json(['data'=>$get_supermarket_items]);
    }
}
