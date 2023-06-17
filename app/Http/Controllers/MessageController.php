<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    //

    function index(Request $request){


        $messages = Message::with('sender','receiver')->where('sender_id',Auth::id())
        ->orWhere('receiver_id',Auth::id())->paginate(20);


        $users = User::role('customer-care')->get();

        if( Auth::user()->hasRole('System-Admin') ){
            $users = User::get();
        }

        return view('pages.messages',compact('messages','users'));

    }

    function show(Request $request,int $id){

        $message = Message::with('sender','receiver')->find($id);

        if( !empty($message) && ( $message->sender_id == Auth::id() || $message->receiver_id == Auth::id() ) ){

            if(Auth::id() == $message->recipient_id){
                $message->status = "read";
                $message->save();
            }

            return view('pages.view_messages',compact('message'));

        }

        return redirect()->route('inbox')->with('error', 'We encounter an error while trying to display your Message. Please Try Again Later');

    }

    function store(Request $request){

        $user = User::role('customer-care')
        ->where('id',$request->recipient)->first();

        if( Auth::user()->role('System-Admin') ){
            $user = User::findOrfail($request->recipient);
        }

        if( !empty($user) ){

            $message = new Message();
            $message->subject = $request->subject;
            $message->body = $request->body;
            $message->sender_id = Auth::id();
            $message->receiver_id = $request->recipient;
            $message->status = "unread";
            $message->save();

            return redirect()->route('inbox')->with('success', 'Message Sent Successfully');
        }

        return redirect()->route('inbox')->with('error', 'We encounter an error while trying to send your Message. Please Try Again Later');

    }



}
