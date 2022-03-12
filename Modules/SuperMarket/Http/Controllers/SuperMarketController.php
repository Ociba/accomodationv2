<?php

namespace Modules\SuperMarket\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Supermarket;
use App\Models\SupermarketCategories;
use App\Models\Order;
use App\Models\Unitprice;
use Carbon\Carbon;

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
     * Show the form for editing the specified item.
     * @param int $id
     * @return Renderable
     */
    public function editSupermarketItems($item_id)
    {
        $edit_supermarket_items =Supermarket::where('id',$item_id)->get();
        return view('supermarket::edit_item',compact('edit_supermarket_items'));
    }

    /**
     * Update the edited item.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateItem($item_id)
    {
        Supermarket::where('id',$item_id)->update(array(
            'item'        =>request()->item,
            'description' =>request()->description,
            'price'       =>request()->price	,
            'number'      =>request()->number,
        ));
        return redirect('/supermarket/supermaket-items')->with('msg','Operation Successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteItem($item_id)
    {
        Supermarket::where('id',$item_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');

    }
      /** 
     * This function gets form for adding discount
    */
    protected function addDiscountForm($item_id){
        $get_form =Supermarket::where('id',$item_id)->get();
        return view('supermarket::add_discount', compact('get_form'));
    }
    /**
     * This function creates discount
     */
    public function saveDiscount($item_id){
        Supermarket::where('id',$item_id)->update(array(
            'new_price'  =>request()->new_price,
            'discount'   =>request()->discount
        ));
        return redirect('/supermarket/supermaket-items')->with('msg','Operation Successful');
    }
       /**
     * This function gets orders from the custommers
     */
    protected function getCustomerOrdersInfo($order_id){
        $get_all_orders_info=Order::join('users','users.id','orders.user_id')
        ->join('supermarkets','supermarkets.id','orders.item_id')
        ->where('orders.status','active')
        ->whereDate('orders.created_at' , '=',Carbon::today())
        ->whereTime('orders.created_at' , '>',Carbon::now()->subHours(1))
         ->where('orders.user_id',$order_id)
        ->select('users.*','orders.user_id','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at','supermarkets.photo',
        'supermarkets.description')
        ->get();
        return view('supermarket::customers_orders_info',compact('get_all_orders_info'));
    }
      /**
     * This function gets orders Details for Particular Person
     */
    protected function printCustomerOrdersInfoNow($user_id){
        $print_orders_info=Order::join('users','users.id','orders.user_id')
        ->join('supermarkets','supermarkets.id','orders.item_id')
        ->where('orders.user_id',$user_id)
        ->whereDate('orders.created_at' , '=',Carbon::today())
        ->whereTime('orders.created_at' , '>',Carbon::now()->subHours(1))
        ->select('users.*','orders.user_id','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at','supermarkets.photo')
        ->limit(1) ->get();
        return view('supermarket::print_now',compact('print_orders_info'));
    }
    /**
     * This function saves the unit Price for customers order
     */
    protected function getUnitPrice($order_id){
        $quantity =Order::where('id',$order_id)->value('quantity');
        $price =Order::where('id',$order_id)->value('price');
        $total =$quantity * $price;


        $unit_price =new Unitprice;
        $unit_price->user_id =request()->user_id;
        $unit_price->total =$total;
        $unit_price->save();
        return redirect()->back()->with('msg','Operation Successful');
    }
   /**
    * This function marks order as delivered
    */
    protected function markOrderAsDelivered($order_id){
        Order::where('user_id',$order_id)->update(array(
            'status' =>'delivered'
        ));
        return redirect()->back()->with('msg','Operation Successful');
    }
     /**
    * This function marks order as delivered
    */
    protected function deleteOrder($order_id){
        Order::where('user_id',$order_id)->delete();
        return redirect()->back()->with('msg','Operation Successful');
    }
}
