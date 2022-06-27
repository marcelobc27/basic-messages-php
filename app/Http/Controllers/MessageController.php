<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }

    public function create(){
        return view('formMessages');

    }

    public function store(Request $request){
        Message::create($request->all());

        return redirect('/messages');
    }

    public function edit($id)
    {
        $message = Message::find($id);
        return view('updateMessage')->with('message', $message);
    }

    public function update(Request $request, $id){
        $data = $request->all();
        unset($data['_token'],$data['_method']);

        Message::where("id", $id)->update($data);

        return redirect('/messages');
    }

    public function destroy($id){
        Message::destroy($id);
        
        return redirect('/messages');
    }
}
