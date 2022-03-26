<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{

    public function index()
    {
        return User::all();
        //return User::find(1)->pds;
    }

    public function getUser($id){
        //
        return User::find($id);
    }
    public function createUser(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password' =>'required',
            'role' => 'required'
        ]);
        //Storage::putFile('photos', new File('/path/to/photo'), 'public');
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'profile' => $request->profile,

        ]);

        try{
            $user->save();
        
            return 'success';
        }catch(Throwable $error){
            return $error;
        }
       
    }
    public function editUser(Request $request, $id)
    {
        
        //
        $request->validate([
            'email'=>'required',
            'password' =>'required',
            'role' => 'required',
        ]);

        $user = User::find($id);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->profile = $request->profile;

        
        try{
            $user->save(); 
            return "success";
        }catch(Throwable $error){
            return $error;
        }

    }
    public function deleteUser($id)
    {
        //
        $contact = User::find($id);
        $contact->delete();

        return "Succesfully deleted";

    }
    public function getUsers()
    {
        //
        $users = User::all();

        return $users;

    }
}
