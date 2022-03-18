<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        //
        return User::all();
    }
    public function createUser(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' =>'required'
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,

        ]);
        $user->save();
        
        return 'success';
    }
    public function editUser(Request $request, $id)
    {
        //
        $request->validate([
            'email'=>'required',
            'password' =>'required'
        ]);

        $user = User::find($id);
        $user->email =  $request->email;
        $user->password = $request->password;

        
        try{
            $user->save(); 
        }catch(Throwable $error){
            return $error;
        }
        
    }
    public function deleteUser($id){
        //
        $contact = User::find($id);
        $contact->delete();

        return "Succesfully deleted";
    
    }
    public function getUsers(){
        //
        $users = User::all();

        return $users;
    
    }
}

