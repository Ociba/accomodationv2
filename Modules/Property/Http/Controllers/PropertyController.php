<?php

namespace Modules\Property\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;  
use App\Models\Property;
use App\Models\Category;
use Auth;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $get_category =DB::table('categories')->select('id','category_name')->get();
        return view('property::index',compact('get_category'));
    }

    /**
     * This function creates property
     */
    private function createProperty(){
        $get_category_id= Category::where(\strtolower("category_name"), strtolower(request()->category_name))->value('id');

        $property_photo = request()->photo;
        $property_photo_original_name = $property_photo->getClientOriginalName();
        $property_photo->move('property_photos/',$property_photo_original_name);

        $property_obj =new Property;
        $property_obj ->category_id   =request()->category_id;
        $property_obj ->user_id       =Auth::user()->id;
        $property_obj ->property_size =request()->property_size;
        $property_obj ->bedroom       =request()->bedroom;
        $property_obj ->bathroom      =request()->bathroom;
        $property_obj ->garage        =request()->garage;
        $property_obj ->location      =request()->location;
        $property_obj ->description   =request()->description;
        $property_obj ->price         =request()->price;
        $property_obj ->photo         =$property_photo_original_name;
        $property_obj ->property_status =request()->property_status;
        $property_obj ->save();
        return redirect()->back()->with('msg', 'You have successfully created property');
    }
    /**
     * This function validates the property being created
     */
    protected function validateProperty(){
        if(empty(request()->category_id)){
            return redirect()->back()->withErrors('Enter category to proceed');
        }elseif(empty(request()->location)){
            return redirect()->back()->withErrors('Enter Location to proceed');
        }elseif(empty(request()->description)){
            return redirect()->back()->withErrors('Enter Description to proceed');
        }elseif(empty(request()->price)){
            return redirect()->back()->withErrors('Enter Price to proceed');
        }elseif(empty(request()->photo)){
            return redirect()->back()->withErrors('Upload Photo to proceed');
        }else{
            return $this->createProperty();
        }
    }
    /**
     * This function gets property information for the logged in user
     */
    public function myProperty(){
        $get_category =DB::table('categories')->select('id','category_name')->get();
        return view('property::my_property',compact('get_category'));
    }
     /**
     * This function gets property information for the logged in user
     */
    public function propertyTaken(){
        return view('property::property_taken');
    }
    /**
     * Show the form for editing the property.
     * @param int $id
     * @return Renderable
     */
    public function editProperty($property_id)
    {
        $edit_property =Property::where('id',$property_id)->get();
        return view('property::edit',compact('edit_property'));
    }

    /**
     * Update the specified property
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateProperty($property_id)
    {
        Property::where('id', $property_id)->update(array(
            'property_size'    =>request()->property_size,
            'bedroom'          =>request()->bedroom,
            'bathroom'         =>request()->bathroom,
            'garage'           =>request()->garage,
            'location'         =>request()->location,
            'description'      =>request()->description,
            'price'            =>request()->price,
            'property_status'  =>request()->property_status,
            'user_id'       =>Auth::user()->id
         ));
         return redirect('/property/my-property')->with('msg','Updates done successful');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function deleteProperty($property_id)
    {
        Property::where('id',$property_id)->delete();
        return redirect()->back()->with('msg','Updates done successful');
    }
     /** 
     * This function gets form for adding discount
    */
    protected function addDiscountForm($property_id){
        $get_discount_form =Property::where('id',$property_id)->get();
        return view('property::add_discount', compact('get_discount_form'));
    }
    /**
     * This function creates discount
     */
    public function saveDiscount($property_id){
        Property::where('id',$property_id)->update(array(
            'discount_price' =>request()->discount_price,
            'discount'       =>request()->discount
        ));
        return redirect('/property/my-property')->with('msg','Operations Successful');
    }
     /**
     * This function deletes property softly
     */
    protected function updatePropertyStatus($property_id){
        Property::where('id',$property_id)->update(array('status'=>'taken'));
        return redirect()->back()->with('msg', 'Property has been taken');

    }
}
