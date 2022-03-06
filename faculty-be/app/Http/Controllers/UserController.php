<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        //
        return User::findAll();
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

        $user->save();
        try{
            return 'success';    
        }catch(Throwable $error){
            return $error;
        }
        
    }
    public function deleteUser($id){
        //
        $contact = Contact::find($id);
        $contact->delete();

        return "Succesfully deleted";
    
    }
}

