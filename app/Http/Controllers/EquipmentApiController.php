<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Http\Resources\EquipmentResource;

class EquipmentApiController extends Controller
{
    //This function returns equipments
      public function getEquipmentInfo(){
        $get_equipment_items =EquipmentResource::collection(Equipment::where('status','active')->get());
        return response()->json(['data'=>$get_equipment_items]);
    }
}
