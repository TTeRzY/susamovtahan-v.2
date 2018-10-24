<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;

class MessagesController extends Controller
{
    public function index(){
        $messages = Messages::all();

        return view('admin.messages.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $messages = new Messages();

        $messages->name = htmlspecialchars($request->names);
        $messages->email = htmlspecialchars($request->email);
        $messages->phone = htmlspecialchars($request->phone);
        $messages->message = htmlspecialchars($request->message);

        $messages->save();

        $name = htmlspecialchars($request->names);
        $phone = htmlspecialchars($request->phone);
        $email = htmlspecialchars($request->email);
        $bodyMessage = htmlspecialchars($request->message);


        $data = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'bodyMessage' => $bodyMessage
        );




        Mail::send('mail-message', $data, function($message) {
            global $request;
            $email = $request->email;
            $message->to('marin.terziyski@gmail.com')->subject('Имате нова поръчка.');
            $message->from($email,'Susamovtahan.bg');
        });

        return redirect()->back();
    }
}
