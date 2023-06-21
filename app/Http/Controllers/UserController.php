<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function register(){
        return view('register_admin');
    }
    function create(Request $request){
        $validate = $this->validate($request,[
            'name' =>'required|string',
            'email' =>'required|string|min:8',
            'password' =>'required_with:confirm_password|min:8|same:confirm_password',
        ]);
        $validate['password']=bcrypt($request->password);
        User::create($validate);
        return redirect ('login/admin');
        }
        function show(){
            $data ['admin'] = User::all();
            return view('admin',$data);
        }
        function delete($id){
            User::where('id',$id)->delete();
            return redirect('admin');
        }
    }
