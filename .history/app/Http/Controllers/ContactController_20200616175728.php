<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
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
        $message->from('j.food.stability@gmail.com ');
        $message->to('j.food.stability@gmail.com ', 'Admin')->subject('Message from Journal Visitor');
    });



        return redirect()->back()->with('message','Message sent successfully');

  }

}
