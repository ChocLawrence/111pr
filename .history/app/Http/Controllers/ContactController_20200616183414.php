<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required'
        ]);


        Mail::send('emails.message',
        array(
            'name' => $request->name,
            'email' => $request->email,
            'messages' => $request->message
        ), function($message)
    {
        $message->from('hello@111-pr.com');
        $message->to('hello@111-pr.com', 'Admin')->subject('Message from 111-PR site Visitor');
    });



        return redirect()->back()->with('message','Message sent successfully');

  }

}
