<?php

namespace App\Http\Controllers;

use App\Models\Models\adminannouncement;
use App\Models\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthManager extends Controller
{

    public function admin(){
        $user = user::all();
        $announcement=adminannouncement::all();
        return view('admin/admin',['user'=>$user,'announcement'=>$announcement]);

    }

    function login(){
        if (Auth::check()){
            return redirect(route('home'));

        }
        return view('login');
    }
    public function usersindex(){
        return redirect(route('/admin/users'));
    }

    function register(){
        if (Auth::check()){
            return redirect(route('home'));
        }

        return view('register');
    }
    function loginPost(Request $request){
        $request->validate([
           'email'=>'required',
           'password'=>'required'

        ]);

        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error","Login details are not valid");
    }
        function registerPost(Request $request)
        {
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'password'=>'required',


        ]);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);

        $user=user::create($data);
        if(!$user){
            return redirect(route('register'))->with("error","Registration failed,try again");
        }
            return redirect(route('login'))->with("succes","Registration succes,login");
        }
        function logout(){
        Session:flush();
        Auth::logout();
        return redirect(route('home'));
        }

}
