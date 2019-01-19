<?php

namespace smart_shop\Http\Controllers;

use Illuminate\Http\Request;
use smart_shop\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

    //

    public function createUser() {
        return view('admin.user.userContent');
    }

    public function manageUser() {
//        $users = User::all();
//        $users = User::simplepaginate();
        $users = User::paginate(10);
        return view('admin.user.manageUserContent', ['users' => $users]);
    }

    public function storeUser(Request $request) {


        $user = new User();

        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/user/manage/')->with('message', 'User Added Success!');
    }

    public function editUser($id) {
        $userById = User::where('id', $id)->first();

        return view('admin.user.editUserContent', ['userById' => $userById]);
    }

    public function updateUser(Request $request) {
        $user = User::where('id', $request->id)->first();

        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;

        $user->save();

        return redirect('/user/manage/')->with('message', 'User Update Success!');
    }
    
    
    public function deleteUser($id){
        $userById = User::find($id);
        
        $userById->delete();
        
        return redirect('/user/manage/')->with('message', 'User Delete Success!');
    }

}
