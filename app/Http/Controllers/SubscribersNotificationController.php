<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Notifications\NewPostNotify;
use Illuminate\Support\Facades\Notification;
use App\Models\Subscriber;
use Illuminate\Notifications\Notifiable;

class SubscribersNotificationController extends Controller
{
    public function postform(){
        return view('post-form');
    }
    public function store(Request $request)
    {
       //Save your new post here . after posting then send mail to the subscriber
       $new_post =new Post;
       $new_post->title =request()->title;
       $new_post->body  =request()->body;
       $new_post->save();
 
        $subscribers = Subscriber::all(); //Retrieving all subscribers
 
        foreach($subscribers as $subscriber){
            Notification::route('mail' , $subscriber->email) //Sending mail to subscriber
                          ->notify(new NewPostNotify($new_post)); //With new post
 
        return redirect()->back()->with('msg',"The notification has been created successfully");
      }
    }
}
