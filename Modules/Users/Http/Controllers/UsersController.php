<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Hash;
use Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('users::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    private function createUser()
    {
        $user_photo = request()->profile_photo_path;
        $user_photo_original_name = $user_photo->getClientOriginalName();
        $user_photo->move('user_photos/',$user_photo_original_name);

        $user_obj = new User;
        $user_obj->email              = request()->email;
        $user_obj->name               = request()->name;
        $user_obj->type               ="staff";
       $user_obj->profile_photo_path =$user_photo_original_name;
        $user_obj->password    = Hash::make(request()->password);
        $user_obj->save();
        return redirect()->back()->with('msg','You have successfully created');
    }
    /**
     * This function validates user created
     */
    public function validateUser(){
        if(empty(request()->name)){
            return redirect()->back()->withErrors('Enter name to continue');
        }elseif(empty(request()->email)){
            return redirect()->back()->withErrors('Enter Email to continue');
        }elseif(empty(request()->profile_photo_path)){
            return redirect()->back()->withErrors('Enter Photo to continue');
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
        * This function suspends the User 
        */
        protected function suspendUser($user_id){
            User::where('id',$user_id)->update(array('status'=>'suspended'));
            return redirect()->back()->with('msg', 'You have Successfully suspended this User');
        }
        /** 
         * This function ctivates suspended User
        */
        protected function activateUser($user_id){
            User::where('id',$user_id)->update(array('status'=>'active'));
            return redirect()->back()->with('msg', 'You have Successfully activated '.request()->name.'');
        }
        /**
         * This function deletes users permanently
         */
        protected function deleteUser($user_id){
            User::where('id',$user_id)->delete();
            return redirect()->back()->with('msg', 'You have Successfully deleted this User');
        }
}
