<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;
use smart_shop\User;

class UserController extends Controller
{
    //
    
    public function createUser(){
        return view('admin.user.userContent');
    }
    
    public function manageUser(){
//        $users = User::all();
//        $users = User::simplepaginate();
        $users = User::paginate(10);
        return view('admin.user.manageUserContent',['users'=>$users]);
    }
    
    public function storeUser(Request $request){
        
        
        $user = new User();
        
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;
        
        $user->save();
        
        return redirect('/user/manage/')->with('message','User Added Success!');
        
    }
}
