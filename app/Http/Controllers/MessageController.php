<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    function contact_message(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
        ]);

        Message::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
            'created_at'=>Carbon::now(),
        ]);
        return back()->withMes_succ('Your Message has been send');
    }

    function message(){
        $messages = Message::all();
        return view('admin.message.message', [
            'messages'=>$messages,
        ]);
    }

    function message_delete($mes_id){
        Message::find($mes_id)->delete();
        return back();
    }

    function message_view(Request $request){
        Message::find($request->mes_id)->update([
            'status'=> 1,
        ]);

        $messege_info = Message::find($request->mes_id);
        return view('admin.message.view_message', [
            'messege_info'=>$messege_info,
        ]);
    }
}
