<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Http\Resources\AccomodationPropertyResource;

class PropertyApiController extends Controller
{
    //This function returns accomodation property type
    public function getAccomodationAndPropertyDetails(){
    $get_accommodation_and_property_info =AccomodationPropertyResource::collection(Property:: join('users','properties.user_id','users.id')
    ->join('categories','properties.category_id','categories.id')
    ->select('properties.*','users.name','categories.category_name')
    ->where('properties.status','pending')->get());
    return response()->json(['data'=>$get_accommodation_and_property_info]);
    }
}
