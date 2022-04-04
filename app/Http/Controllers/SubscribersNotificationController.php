<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subscriber;
use Notification;
use App\Notifications\MyFirstNotification;

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
 
        $subscribers = \DB::table('subscribers')->get('email'); //Retrieving all subscribers
 
        $details = [
            'greeting' => 'Hi, Subscriber!',
            'title'    =>'Testing Notification',
            'body' => 'There is a new post , hope you will like it',
            'thanks' => 'Thank you for using joome Accomodation,Property produce and supermarket Platform!',
            'actionText' => 'View Our Platform',
            'actionURL' => url('https://jjoome.goproug.com/'),
        ];
  
        Notification::route('mail', $subscribers)->notify(new MyFirstNotification($details));
 
        return redirect()->back()->with('msg',"The notification has been created successfully");
    }
}
