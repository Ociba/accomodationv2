<?php

namespace Modules\AgricultureEquipments\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Equipment;
use App\Models\Order;
use Auth;
use Carbon\Carbon;
use App\Models\Unitprice;


class AgricultureEquipmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('agricultureequipments::index');
    }
    /**
     * This function gets received requests
     */
    public function equipmentReceivedRequests(){
        return view('agricultureequipments::received_requests');
    }
     /**
     * This function gets equipments in stock for sale
     */
    public function availbleEquipments(){
        return view('agricultureequipments::available_equipment');
    }
     /**
     * This function gets equipments being taken or bought
     */
    public function equipmentTaken(){
        return view('agricultureequipments::equipment_taken');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function saveEquipment()
    {
        $equipment_photo = request()->photo;
        $equipment_photo_original_name = $equipment_photo->getClientOriginalName();
        $equipment_photo->move('equipment_photos/',$equipment_photo_original_name);

        $equipment_obj =new Equipment;
        $equipment_obj ->equipment   =request()->equipment;
        $equipment_obj ->price       =request()->price;
        $equipment_obj ->description =request()->description;
        $equipment_obj ->quantity    =request()->quantity;
        $equipment_obj ->photo       =$equipment_photo_original_name;
        $equipment_obj ->created_by  =Auth::user()->id;
        $equipment_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created Equipment');
    }
    /**
     * This function validates the property being created
     */
    protected function validateEquipment(){
        if(empty(request()->equipment)){
            return redirect()->back()->withErrors('Enter Equipment to proceed');
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Enter Description to proceed');
        }elseif(empty(request()->quantity)){
            return redirect()->back()->withErrors('Enter Quantity to proceed');
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Enter Price to proceed');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload Photo to proceed');
        }else{
            return $this->saveEquipment();
        }
    }
    /**
     * Show the form for editing the equipment informations.
     * @param int $id
     * @return Renderable
     */
    public function editEquipment($equipment_id)
    {
        $edit_equipment =Equipment::where('id',$equipment_id)->get();
        return view('agricultureequipments::edit',compact('edit_equipment'));
    }

    /**
     * Update the specified equipment.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateEquipmentInfo($equipment_id)
    {
        Equipment::where('id',$equipment_id)->update(array(
            'equipment'   =>request()->equipment,
            'price'       =>request()->price,
            'description' =>request()->description,
            'quantity'    =>request()->quantity
        ));
        return redirect('/agricultureequipments/equipments-available')->with('msg', 'You have successfully created Equipment');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteEquipment($equipment_id)
    {
        Equipment::where('id',$equipment_id)->delete();
        return redirect()->back()->with('msg', 'You have successfully created Equipment');
    }
      /** 
     * This function gets form for adding discount
    */
    protected function addDiscountForm($equipment_id){
        $get_discount_form =Equipment::where('id',$equipment_id)->get();
        return view('agricultureequipments::add_discount', compact('get_discount_form'));
    }
    /**
     * This function creates discount 
     */
    public function saveDiscount($equipment_id){
        Equipment::where('id',$equipment_id)->update(array(
            'discount_amount'    =>request()->discount_amount,
            'equipment_discount' =>request()->equipment_discount
        ));
        return redirect('/agricultureequipments/equipments-available')->with('msg','Operations Successful');
    }
    /**
     * This function makes equipment delivered  
     */
    public function markAsEquipmentDelivered($equipment_id){
        Equipment::where('id',$equipment_id)->update(array('status'=>'taken'));
        return redirect()->back()->with('msg','Operations Successful');
    }
      /**
     * This function gets orders from the custommers
     */
    protected function getCustomerOrdersInfo($order_id){
        $get_all_orders_info=Order::join('users','users.id','orders.user_id')
        ->join('equipment','equipment.id','orders.equipment_id')
        ->where('orders.status','active')
        ->whereDate('orders.created_at' , '=',Carbon::today())
        ->whereTime('orders.created_at' , '>',Carbon::now()->subHours(1))
         ->where('orders.user_id',$order_id)
        ->select('users.*','orders.user_id','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at','equipment.photo',
        'equipment.description')
        ->get();
        return view('agricultureequipments::customers_orders_info',compact('get_all_orders_info'));
    }
      /**
     * This function gets orders Details for Particular Person
     */
    protected function printCustomerOrdersInfoNow($user_id){
        $print_orders_info=Order::join('users','users.id','orders.user_id')
        ->join('equipment','equipment.id','orders.equipment_id')
        ->where('orders.user_id',$user_id)
        ->whereDate('orders.created_at' , '=',Carbon::today())
        ->whereTime('orders.created_at' , '>',Carbon::now()->subHours(1))
        ->select('users.*','orders.user_id','orders.item_name','orders.quantity','orders.price','orders.id','orders.created_at','equipment.photo')
        ->limit(1) ->get();
        return view('agricultureequipments::print_now',compact('print_orders_info'));
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
}
