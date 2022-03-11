<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Hash;
use Auth;

class CheckoutController extends Controller
{
    private function createUser()
    {

        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->type               ="supermarket";
        $user_obj->contact            =request()->contact;
        $user_obj->address            =request()->address;
        $user_obj->division           =request()->division;
        $user_obj->street             =request()->street;
        $user_obj->plot_number        =request()->plot_number;
        $user_obj->town               =request()->town;
        $user_obj->password    = Hash::make(request()->password);
        $user_obj->save();
        return redirect()->back()->with('msg','You have successfully created Your Account');
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
        }elseif(empty(request()->address)){
            return redirect()->back()->withErrors('Enter Address to continue');
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
}
