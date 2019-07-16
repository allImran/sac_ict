<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function send()
    {
    	// Mail::send(['text'=>'mail'],['name'], function($message){
    	// 	$message->to('badhan19@gmail.com','name')->subject('test email');
    	// 	$message->from('support@sacrificeict.org', 'name');
    	// });

    	$data = array( 'email' => 'badhan19@gmail.com', 'first_name' => 'Lar', 'from' => 'sample@sample.comt', 'from_name' => 'Vel' );

		Mail::send( 'mail', $data, function( $message ) use ($data)
		{
		    $message->to( $data['email'] )->from( $data['from'], $data['first_name'] )->subject( 'Welcome!' );
		});
    }
}
