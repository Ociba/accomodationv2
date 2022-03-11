<?php

namespace Modules\Produce\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Produce;
use App\Models\ProduceCategory;

class ProduceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('produce::index');
    }

    public function availableProduce()
    {
        $produce_category =ProduceCategory::select('id','produce_category')->get();
        return view('produce::available_produce',compact('produce_category'));
    }
  
    public function takenProduce()
    {
        return view('produce::taken_produce');
    }
    public function myProduce() 
    {
        $produce_category =ProduceCategory::select('id','produce_category')->get();
        return view('produce::my_produce',compact('produce_category'));
    }
    /**
     * Show the form for creating a new produce.
     */
    protected function createProduce(){
        $produce_photo = request()->image;
        $produce_photo_original_name = $produce_photo->getClientOriginalName();
        $produce_photo->move('produce_photos/',$produce_photo_original_name);

        $produce_obj = new Produce;
        $produce_obj->created_by            = auth()->user()->id;
        $produce_obj->produce_category_id   = request()->produce_category_id;
        $produce_obj->quantity              = request()->quantity;
        $produce_obj->phone_number          = request()->phone_number;
        $produce_obj->produce_name          = request()->produce_name;
        $produce_obj->price                 = request()->price;
       $produce_obj->image                  =$produce_photo_original_name;
        $produce_obj->save();
        return redirect()->back()->with('msg','Operation Successfull');
    }
    //This function validates Produce Infor
    protected function saveProduceInfo(){
        if(empty(request()->produce_category_id)){
            return redirect()->back()->withErrors('Enter Produce Category to continue');
        }elseif(empty(request()->quantity)){
            return redirect()->back()->withErrors('Enter Quantity to continue');
        }elseif(empty(request()->phone_number)){
            return redirect()->back()->withErrors('Enter Phone Number to continue');
        }elseif(empty(request()->image)){
            return redirect()->back()->withErrors('Enter Image to continue');
        }elseif(empty(request()->produce_name)){
            return redirect()->back()->withErrors('Enter Name of Produce to continue');
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Enter Price to continue');
        }else{
                return $this->createProduce();
            }
    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function AddDiscountForm($produce_id)
    {
        $get_discount_form =Produce::where('id',$produce_id)->get();
        return view('produce::discount',compact('get_discount_form'));
    }

    /**
     * This function creates discount
     * @param int $id
     * @return Renderable
     */
    public function saveDiscount($produce_id)
    {
        Produce::where('id',$produce_id)->update(array(
            'new_amount'         =>request()->new_amount,
            'discount_percentage'=>request()->discount_percentage
        ));
        return redirect('produce/my-produce')->with('msg','Operation Successfull');
    }

    /**
     * This function gets form to edit produce.
     * @param int $id
     * @return Renderable
     */
    public function editProduce($produce_id)
    {
        $edit_produce =Produce::where('id',$produce_id)->get();
        return view('produce::edit_produce',compact('edit_produce'));
    }

    /**
     * Update the edited produce info.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateProduce($produce_id)
    {
        Produce::where('id',$produce_id)->update(array(
            'quantity'         =>request()->quantity,
            'price'            =>request()->price,
            'phone_number'     =>request()->phone_number,
        ));
        return redirect('produce/my-produce')->with('msg','Operation Successfull');
    }

    public function markProduceAsSold($produce_id)
    {
        Produce::where('id',$produce_id)->update(array('status'=>'sold'));
        return redirect('produce/my-produce')->with('msg','Operation Successfull');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteProduce($produce_id)
    {
        Produce::where('id',$produce_id)->delete();
        return redirect()->back()->with('msg','Operation Successfull');
    }
}
