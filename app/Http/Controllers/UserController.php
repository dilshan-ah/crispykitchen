<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('backend/manage-user',compact('users'));
    }

    public function delete($id){
        $users = User::find($id);

        $users->delete();
        return back();
    }

    public function edit($id){
        $users = User::find($id);

        return view('backend/edit-user',compact('users'));
    }

    public function update(Request $request,$id){
        $users = User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;

        $users->update();

        return redirect()->route('admin.user-man');
    }

}
