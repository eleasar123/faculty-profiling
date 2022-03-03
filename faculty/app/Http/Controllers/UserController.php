<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        //
    }
    public function createUser(Request $request)
    {
        //
        $request->validate([
            'email'=>'required',
            'password' =>'required'
        ]);

        $user = new User([

            'email' => $request->email,
            'password' => $request->password,

        ]);
        $user->save();
        return 'success';
    }
    public function editUser(Request $request)
    {
        //
        $request->validate([
            'email'=>'required',
            'password' =>'required'
        ]);

        $user = new User([

            'email' => $request->email,
            'password' => $request->password,

        ]);
        $user->save();
        return 'success';
    }
}

