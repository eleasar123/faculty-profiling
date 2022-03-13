<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    //
     
    public function index (Request $userInfo){
            // var_dump($userInfo);
            $userId = 0;
            $userDetails = [];
            $response = collect();
            $message = '';
            $userIdWithEmail = User::select('id')->where('password', $userInfo->password)->first();
            $userIdWithPassword = User::select('id')->where('email', $userInfo->username)->first();
            
            $userId = $userIdWithEmail == '' ? $userIdWithPassword : $userIdWithEmail;
            if($userId === null) {
                $message = "Incorrect username and password";
                $userDetails =[];
            }else{
                $userDetails = User::find($userId -> id)->first();
                if($userDetails -> email != $userInfo -> username AND $userDetails -> password === $userInfo -> password){
                    $message = 'Incorrect email!';

                }elseif($userDetails -> email === $userInfo -> username AND $userDetails -> password != $userInfo -> password){
                    $message ="Incorrect password!";

                }else{

                    $message = "Credentials matched!";
                    
                }
            }
            $response = collect([['message' => $message]]);
            
            $token = $userDetails -> createToken('loginAccess');
            $response -> push([['account' => $userDetails]]);
            $response-> push([['token' => $token->plainTextToken]]);
            return $response;
        

    }
}
