<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\adminannouncementcontroller;
use App\Http\Controllers\Controller;
use App\Models\Models\adminannouncement;


class App extends Controller
{

    public function announcement(){
        return view("announcement");
    }

    public function message(){
        return  view("message");
    }
    public function users(){
        return  view("admin/users");
    }
    public function login(){
        return view("login");
    }
    public function mainpage(){
        return view('mainpage');

    }
    public function profile(){
        return view('profile');

    }


}
