<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Supermarket;
use App\Models\Produce;
use App\Models\Equipment;
use App\Models\Cart;

class HomeController extends Controller
{
    protected function getWelcomePage(){
        //This statement gets property
        $get_accomodation =Property::join('users','users.id','properties.user_id')
        ->join('categories','categories.id','properties.category_id')
        ->latest()->limit(6)->get(['categories.category_name','users.contact','properties.*']);
        //This statement gets shop items
        $supermarket_items =Supermarket::where('discount',null)->where('status','active')->latest()->limit(6)->get();
        //This statement gets produce
        $produce =Produce::join('users','users.id','produces.created_by')->where('produces.status','available')
        ->latest()->limit(6)->get(['produces.*','users.address']);
        //This statement get equipments
        $equipment_items =Equipment::where('status','active')->latest()->limit(6)->get();
        $cartItems = \Cart::getContent();
        return view('welcome',compact('get_accomodation','supermarket_items','produce','equipment_items','cartItems'));
    }
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        //return redirect()->route('cart.list');
        return redirect()->back();
    }
}
