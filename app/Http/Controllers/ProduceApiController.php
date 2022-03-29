<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produce;
use App\Http\Resources\ProduceResource;

class ProduceApiController extends Controller
{
    //This function returns produce
    public function getProduceInfo(){
        $get_produce_info =ProduceResource::collection(Produce::where('status','available')->get());
        return response()->json(['data'=>$get_produce_info]);
        }
}
