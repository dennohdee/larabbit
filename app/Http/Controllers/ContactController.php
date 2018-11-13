<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contact()
    {
        return view('contact');
        
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $newsletter = $request->input('newsletter') == 'on' ? true : false;

        //dd($newsletter);
        $contact = new Contact();

        $contact->name = $name;
        $contact->email = $email;
        $contact->message = $message;
        $contact->newsletter = $newsletter;


        $contact->save();
        return redirect()->route('contact');
        }
       
}
