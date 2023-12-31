<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    //
//     function register(){
//         return view('register');
//     }
//     function create(Request $request){
//         $validate = $this->validate($request,[
//             'name' =>'required|string',
//             'email' =>'required|string|min:8',
//             'password' =>'required_with:confirm_password|min:8|same:confirm_password',   
//         ]);
//         $validate['password']=bcrypt($request->password);
//         Member::create($validate);
//         return redirect ('/');
//     }
//     function show(){
//         $data ['member'] = Member::all();
//         return view('member',$data);
//     }
//     function delete($id){
//         Member::where('id_member',$id)->delete();
//         return redirect ('member');
//     }
// }



function register(){
    return view('register');
}
function create(Request $request){
    Member::create([
        'nama'=>$request->nama,
        'kontak'=>$request->kontak,
        'alamat'=>$request->alamat,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),

    ]);
    return redirect('welcome');
}
function show(){
    $data ['member'] = Member::all();
    return view('member',$data);
}
function delete($id){
    Member::where('id_member',$id)->delete();
    return redirect ('member');
}
}
