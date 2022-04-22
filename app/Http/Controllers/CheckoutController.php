<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Hash;
use Auth;
use App\Models\Order;
use App\Models\Supermarket;
use App\Models\Equipment;

class CheckoutController extends Controller
{
    private function createUser()
    {

        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->type_id            =3;
        $user_obj->contact            =request()->contact;
        $user_obj->location_id        =request()->location_id;
        $user_obj->division           =request()->division;
        $user_obj->street             =request()->street;
        $user_obj->plot_number        =request()->plot_number;
        $user_obj->town               =request()->town;
        $user_obj->password           = Hash::make(request()->password);
        $user_obj->save();
        return redirect('/login')->with('msg','You have successfully created Your Account');
    }
    /**
     * This function validates user created
     */
    public function validateSupermarketUser(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Enter Contact to continue');
        }elseif(empty(request()->division)){
            return redirect()->back()->withErrors('Enter Division to continue');
        }elseif(empty(request()->town)){
            return redirect()->back()->withErrors('Enter Contact to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This  email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createUser();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
      /**
     * This function creates checkout order
     */
    public function createCheckoutOrder(){
        $cartItems = \Cart::getContent();
        foreach($cartItems as $item){
            Order::create([
                'user_id'      =>auth()->user()->id,
                'item_id'      =>$item->id,
                'item_name'	   =>$item->name,
                'quantity'     =>$item->quantity,
                'price'        =>$item->price,
            ]);
        }
    return redirect()->back()->with('msg', 'You have successfully submitted Your Order,Our deleivery Person will call you soon');
    }
    /**
     * This function updates persons details before ordering
     */
    protected function updateProfileForm(){
        $supermarket_items =Supermarket::where('discount',null)->where('status','active')->latest()->get();
        $equipment_items =Equipment::where('status','active')->latest()->get();
        $cartItems = \Cart::getContent();
     return view('profile-form',compact('cartItems','supermarket_items','equipment_items'));
    }
    /**
     * This function updates supermarket or equipments user information
     */
    protected function UpdateProfile(){
        User::where('email',request()->email)->update(array(
            'email'              => request()->email,
            'contact'            =>request()->contact,
            'location_id'        =>request()->location_id,
            'division'           =>request()->division,
            'street'             =>request()->street,
            'plot_number'        =>request()->plot_number,
            'town'              =>request()->town,
            'password'          => Hash::make(request()->password)
        ));
        return redirect('/login')->with('msg','You have successfully Update Your Account Information');
    }
}
