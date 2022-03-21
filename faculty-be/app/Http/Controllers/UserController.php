<?php

namespace App\Http\Controllers;

use App\Models\User;
<<<<<<< HEAD
use Illuminate\Http\Request;

=======
use Illuminate\Support\Facades\Storage;
>>>>>>> 9afc7a3e0ffddaddcf09978a8f99c5d46525b91c
class UserController extends Controller
{

    public function index()
    {
        return User::all();
    }

    public function getUser($id){
        //
        return User::find($id);
    }
    public function createUser(Request $request)
    {
        //
        $request->validate([
<<<<<<< HEAD
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
=======
            'name'=>'required',
            'email'=>'required',
            'password' =>'required',
            'role' => 'required'
>>>>>>> 9afc7a3e0ffddaddcf09978a8f99c5d46525b91c
        ]);
        //Storage::putFile('photos', new File('/path/to/photo'), 'public');
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'profile' => $request->profile,

        ]);
<<<<<<< HEAD
        $user->save();

        return 'success';
=======

        try{
            $user->save();
        
            return 'success';
        }catch(Throwable $error){
            return $error;
        }
       
>>>>>>> 9afc7a3e0ffddaddcf09978a8f99c5d46525b91c
    }
    public function editUser(Request $request, $id)
    {
        
        //
        $request->validate([
<<<<<<< HEAD
            'email' => 'required',
            'password' => 'required',
=======
            'email'=>'required',
            'password' =>'required',
            'role' => 'required',
>>>>>>> 9afc7a3e0ffddaddcf09978a8f99c5d46525b91c
        ]);

        $user = User::find($id);
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->profile = $request->profile;

<<<<<<< HEAD
        try {
            $user->save();
        } catch (Throwable $error) {
=======
        
        try{
            $user->save(); 
            return "success";
        }catch(Throwable $error){
>>>>>>> 9afc7a3e0ffddaddcf09978a8f99c5d46525b91c
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
