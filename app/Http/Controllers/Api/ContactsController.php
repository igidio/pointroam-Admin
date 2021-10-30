<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Events\NewMessage;

class ContactsController extends Controller
{
    public function index(){
        //$contacts = User::all();
        //$contacts = User::where('id', '!=', auth()->id())->get();
        $contacts = User::where('id', '!=', 1)->get();
        return response()->json($contacts);
    }
    public function getMessagesFor($id){
        $messages = Message::where('from',$id)->orWhere('to',$id)->get();
        return response()->json($messages);
    }
    public function send(Request $request){
        $message = Message::create([
            'from' => 1, //Cambiar
            //'from' => auth()->id(),
            'to' => $request->contact_id,
            'text' => $request->text
        ]);
        broadcast(new NewMessage($message));
        return response()->json($message);
    }
}
