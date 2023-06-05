<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Models\user;
use Illuminate\Http\Request;
use App\Http\Requests\users\UpdateAdminUserRequest;
use App\Http\Requests\Users\UpdateProfileRequest;
use Illuminate\Support\Facades\Hash;

class AdminUser extends Controller
{
    public function index(){
        $users=user::all();
        return view('/admin/users')->with('users',$users);
    }
    public function edit($id){
        $users=user::find($id);
        return view('admin/edit',compact('users'));
    }
    public function add(){
        return view('admin/add');
    }
    public function insert(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['password']=Hash::make($request->password);
        $user=user::create($data);
        return redirect('/admin/users');
    }
    public function remove($id){
        $users=user::find($id);
        $users->delete();
        return redirect('admin/users');
    }

    public function update(Request $request,$id){
        $users=user::find($id);
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->update();
        return redirect('/admin/users')->with('status',"user updated succesfully");
    }
}
