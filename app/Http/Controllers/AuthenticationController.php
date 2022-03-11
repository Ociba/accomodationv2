<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;

class AuthenticationController extends Controller
{
    
    protected function logoutUser(){
        Auth::logout();
        return redirect('/');
    }
    protected function createAccomodationUser(){
        $user_photo = request()->profile_photo_path;
        $user_photo_original_name = $user_photo->getClientOriginalName();
        $user_photo->move('user_photos/',$user_photo_original_name);

        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->address            = request()->address;
        $user_obj->contact            = request()->contact;
        $user_obj->type               ="accomodation";
       $user_obj->profile_photo_path =$user_photo_original_name;
        $user_obj->password    = Hash::make(request()->password);
        $user_obj->save();
        return Redirect('/login-now')->with('msg','You have successfully created Account');
    }
    //This function validates accomodation user  registerProduceUser
    protected function registerAccomodationUser(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
        }elseif(empty(request()->address)){
            return redirect()->back()->withErrors('Enter address to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Enter Contact to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This  email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createAccomodationUser();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
    /**
     * This fucntion saves user to advertise produce
     */
    protected function createProduceUser(){
        $user_photo = request()->profile_photo_path;
        $user_photo_original_name = $user_photo->getClientOriginalName();
        $user_photo->move('user_photos/',$user_photo_original_name);

        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->address            = request()->address;
        $user_obj->contact            = request()->contact;
        $user_obj->type               ="produce";
       $user_obj->profile_photo_path =$user_photo_original_name;
        $user_obj->password    = Hash::make(request()->password);
        $user_obj->save();
        return Redirect('/login-now')->with('msg','You have successfully created Account');
    }
     //This function validates accomodation user  
     protected function registerProduceUser(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
        }elseif(empty(request()->address)){
            return redirect()->back()->withErrors('Enter address to continue');
        }elseif(empty(request()->contact)){
            return redirect()->back()->withErrors('Enter Contact to continue');
        }elseif(User::where('email',request()->email)->exists()){
            return redirect()->back()->withErrors('This  email is already taken');
        }else{
            if(request()->password == request()->password_confirmation){
                return $this->createProduceUser();
            }else{
                return redirect()->back()->withErrors('Make sure the two passwords match');
            }
        }
    }
}
