<?php 
namespace Swb\Feedback\Components;

use CMS\Classes\ComponentBase;
use Input;
use Mail;

class FeedbackForm extends ComponentBase 
{
    public function componentDetails()
    {
        return [
            'name' => 'Feedback Form',
            'description' => 'Feedback Form use mail',
        ];
    }

    public function onSend()
    {
        $vars = [
            'name' => Input::get('name'),
            'email' => Input::get('email'),
            'phone' => Input::get('phone'),
            'select' => Input::get('select'),
        ];

        $pat = 'swb.feedback::mail.message';


        Mail::send($pat, $vars, function($message) {
            $message->to('kojiek7212@gmail.com', 'Admin Person');
            $message->subject('New message from SWB');
        });
    }


}