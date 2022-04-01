<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPostNotify extends Notification
{
    use Queueable;
 
    public $post;
 
    public function __construct($post)
    {
       $this->post = $post; //Catching New Post
    }
 
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Hey user, New post availabe')
                    ->greeting('Hello' , 'Subscriber')
                    ->line('There is a new post , hope you will like it')
                    ->line('Post title : '.$this->post->title) //Send with post title
                    ->line('Post Body : '.$this->post->body)
                    //->action('Read Post' , url(route('/send' , $this->post->slug))) //Send with post url
                    ->line('Thank you for being with us!');
    }
    public function via ($notifiable) {
        return ['mail'];
    }
}
