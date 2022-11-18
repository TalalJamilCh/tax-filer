<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function subscribe(Request $request ){

        $request->validate([
            'email'=> 'required|unique:subscribers'
        ]);
        
        $email =  $request->email;
        

        Subscriber::create(
            ['email' => $email ]
        );
        return redirect()->back()->with('success', 'Subscribe Successfully');   
    }
}
