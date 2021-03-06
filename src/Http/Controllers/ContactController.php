<?php

namespace Prabir\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Matrix\Exception;
use Prabir\Contact\Mail\ContactMailable;
use Prabir\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');

    }
    public function send(Request  $request)
    {
        try{
            $mailData = [
                'name' => $request->name,
                'email' =>$request->email,
                'message' => $request->message,
            ];
            Mail::to($mailData['email'])->send(new ContactMailable($mailData));
            Contact::create($request->all());
            return "Mail Successfully Send !";

        }catch (Exception $e){
            return $e->getMessage();
        }


    }
}
