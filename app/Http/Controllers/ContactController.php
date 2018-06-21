<?php

namespace App\Http\Controllers;

use App\Contact;
use Mail\myMail;
use Session;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function saveSendEmail(Request $request)
    {
        
        $request->validate([
           
            'name' => 'required|regex:/^[a-zA-Z ]*$/',
            'email' => 'required|email',
            'msg' =>'max:200'
        ]);

        $contact = new Contact;
        $contact->name = request('name');
        $contact->email = request('email');
        if($request->msg != null)
        {
            $contact->message = request('msg');

        }
        if($contact->save())
        {
              $data = ['name'=>$contact->name , 'email'=>$contact->email, 'message' => $contact->message];
                \Mail::send('email.myMail',['data'=>$data], function ($smessage) use($contact)
                {
                    $smessage->from(env('SUPPORT_FROM_EMAIL'),config('app.adminName'))->to(env('SUPPORT_To_EMAIL'))->subject(config('app.userSubject'));
                });
                return response()->json("Your Response Is Submitted",200);
            
        }
        
        return response()->json("Your Response Not Submitted",422);
        
    }
}
