<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class UserController extends Controller
{

    public function index()
    {
        return DB::table('users')->get();
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
            'role' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
        ]);
        //Storage::putFile('photos', new File('/path/to/photo'), 'public');
        if ($request->hasFile('photo')) {
            $image           = $request->file('photo');
            $destinationPath = 'public/profile/user-profile/';
            $imageName       = $image->getClientOriginalName();
            $path            = $request->file('photo')->storeAs($destinationPath, $imageName);
            
            $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request -> role,
                'profile' => $imageName,
            ]);
        }
        try{
            $user->save();
            return 'success';
        }catch(Throwable $error){
            return $error;
        }
       
    }


    public function editUser(Request $request, $id)
    {
        $request->validate([
            'id' => 'required',
            'name'=>'required',
            'email'=>'required',
            'password' =>'required',
            'role' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
        ]);

        $affected = 0;
        if ($request->hasFile('photo')) {
           
            $image           = $request->file('photo');
            $destinationPath = 'public/profile/user-profile/';
            $imageName       = $image->getClientOriginalName();
            $path            = $request->file('photo')->storeAs($destinationPath, $imageName);
            
            $affected = DB::table('users')
                ->where('id', $request->id)
                ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'role' => $request -> role,
                'profile' => $imageName]);
                
        }    
        
        try{
            if($affected > 0 ){
                return 'success';
            }
            
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
