<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request,[
            
        'name' => 'required',
        'comment' => 'required'
    ]);
        
        
        
        $message = new Message;
        $message ->name= $request->input('name');
        $message ->comment= $request->input('comment');
        $message->save(); 
        
        return redirect('/')->with('status','Comment Sent');
          
    } 
    
    public function getMessages(){
        $messages = Message::all();
        
        return view('messages')->with('messages',$messages);
    }
}
