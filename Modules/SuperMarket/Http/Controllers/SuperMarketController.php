<?php

namespace Modules\SuperMarket\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Supermarket;
use App\Models\SupermarketCategories;

class SuperMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('supermarket::index');
    }
    /**
     * This function get all supermarket items
     */
    public function getSupermarketItems()
    {
        $get_categories=SupermarketCategories::select('id','item_category')->get();
        return view('supermarket::supermarket_items',compact('get_categories'));
    }
    /**
     * This function get all supermarket customer orders
     */
    public function getSupermarketCustomerOrders()
    {
        return view('supermarket::customer_orders');
    }

     /**
     * This function get all supermarket customer orders
     */
    public function getSupermarketCustomerOrdersSummary()
    {
        return view('supermarket::customer_order_summary');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    private function createItem()
    {
        $super_market_photo = request()->photo;
        $super_market_photo_original_name = $super_market_photo->getClientOriginalName();
        $super_market_photo->move('super_market_photos/',$super_market_photo_original_name);

        $object =new Supermarket;
        $object->item_group_id   =request()->item_group_id;  
        $object->item            =request()->item;
        $object->description     =request()->description;
        $object->price           =request()->price;
        $object->number          =request()->number;
        $object->photo           =$super_market_photo_original_name;
        $object->created_by       =auth()->user()->id;
        $object->save();
        return redirect()->back()->with('msg','Operation Successful');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function saveItem()
    {
        if(empty(request()->item_group_id)){
            return redirect()->back()->withErrors('Enter category to proceed');
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Enter Location to proceed');
        }elseif(empty(request()->item)){
        return redirect()->back()->withErrors('Enter Item to proceed');
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Enter Description to proceed');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload Photo to proceed');
        }elseif(empty(request()->number)){
            return redirect()->back()->withErrors('Enter number to proceed');
        }else{
            return $this-> createItem();
        }
    }
    
    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('supermarket::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('supermarket::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
