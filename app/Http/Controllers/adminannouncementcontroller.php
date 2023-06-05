<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\adminannouncement;

class adminannouncementcontroller extends Controller
{
    public function adminannouncementindex(){

        return view('/admin/announcement');
    }
    public function announcements(Request $request){
        $search=$request['search']??"";
        if ($search!=""){

            $announcements=adminannouncement::where('title','LIKE',"%$search%")->orWhere('content','LIKE',"%$search%")->get();

        }
        else{
            $announcements = adminannouncement::all();
        }
        $data=compact('search');
        return view('announcements',['announcements'=>$announcements])->with($data);
    }
    public function announcement(){

    }


    public function show($id){

        $announcements=adminannouncement::find($id);
        return view('/announcement')->with('announcements',$announcements);
    }

    public function store(Request $request){
        $data=$request->validate([
            'title'=>'required',
            'content'=>'required'

        ]);
        $newannoun=adminannouncement::create($data);
        return redirect(route('adminannouncement'));
    }
}
