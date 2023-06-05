<?php

namespace App\Http\Controllers;

use App\Models\Models\message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class messageController extends Controller
{
    public function index(){
        $messages=message::all();
        return view('/message')->with('messages',$messages);

    }


    public function send(Request $request){
        $request->validate([
            'mesaj'=>'required',
            'gonderici'=>'required',
            'alici'=>'required'


        ]);
        $data['mesaj']=$request->input('mesaj');
        $data['gonderici']=$request->input('gonderici');
        $data['alici']=$request->input('alici');
        $mesaj=message::create($data);
        return view('/message');

    }
}
