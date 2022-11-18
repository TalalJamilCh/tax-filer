<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_email(Request $request ){
        $data= $request->all();
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'phone' => 'required',
            'subject'=> 'required',
            'message' => 'required'

        ]);
        
        $mail = Mail::to(env('MAIL_ADMIN_EMAIL'))->send(new ContactMail( $data));

        if($mail){
            
        return redirect()->back()->with('success', 'Thank you for contacting Us.');   

        }
    }
}
