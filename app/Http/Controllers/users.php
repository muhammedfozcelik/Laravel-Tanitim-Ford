<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\users\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use App\Models\Models\user;
class users extends Controller
{



    public function profile(){
        $user = user::all();
        return view('profile',['user'=>$user]);
    }
    public function update(UpdateProfileRequest $request){
        $user=auth()->user();

        $user->update([
           'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),

        ]);
        session()->flash('success','User updated successfully');
        return redirect('profile');
    }






    public function edit(){
        return view('profile')->with('user',auth()->user());
    }



    public function create(){
        return view('user.create');
    }


}
