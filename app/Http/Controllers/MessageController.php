<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Message;


class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(Request $request)
    {
            $seller_id = $request['seller_id'];
            $ad_id = $request['ad_id'];

            return view('message',compact('seller_id','ad_id'));
    }
    public function store(Request $request)
    {
       
        $message = new Message();
        $message->content = $request['content'];
        $message->seller_id = $request['seller_id'];
        $message->buyer_id = $request['buyer_id'];
        $message->ad_id = $request['ad_id'];
        $message->save();

        return redirect()->route('welcome')->with('success','Votre message a bien été posté.');
    }
}
