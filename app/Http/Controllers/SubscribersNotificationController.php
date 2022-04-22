<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Subscriber;
use Notification;
use App\Notifications\MyFirstNotification;

class SubscribersNotificationController extends Controller
{
    protected function getPosts(){
        $get_posts =Post::get();
        return view('posts',compact('get_posts'));
    }
    public function postform($post_id){
        $update_notification =Post::where('id',$post_id)->get();
        return view('post-form', compact('update_notification'));
    }
    public function store(Request $request,$post_id)
    {
       //Save your new post here . after posting then send mail to the users
       Post::where('id',$post_id)->update(array(
                'title' =>request()->title,
                'body'  =>request()->body,
       ));
 
        $subscribers = \DB::table('subscribers')->get('email'); //Retrieving all subscribers
        $users = \DB::table('users')->get(); //Retrieving all users
        $posts = \DB::table('posts')->first();
 
        $details =[
            'greeting' => $this->greeting_msg(),
            'title' => $posts->title,
            'body' => $posts->body,
            'thanks' => 'Thank you for using joome Accomodation,Property produce and supermarket Platform!',
            'actionText' => 'View Our Platform',
            'actionURL' => url('https://jjoome.goproug.com/'),
        ];
  
        Notification::route('mail', $users,$subscribers)->notify(new MyFirstNotification($details));
        //Notification::send($users, new MyFirstNotification($details));
 
        return redirect()->back()->with('msg',"The notification has been send successfully");
    }
    private function greeting_msg() {
        $hour = date('H');
        if ($hour >= 18) {
           $greeting = "Good Evening";
        } elseif ($hour >= 12) {
            $greeting = "Good Afternoon";
        } elseif ($hour < 12) {
           $greeting = "Good Morning";
        }
        return $greeting;
    }
}
