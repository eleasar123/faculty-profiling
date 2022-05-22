<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Laravel\Sanctum\NewAccessToken;

class LoginController extends Controller
{
    //
     public function index(){
         return "hello world!";
    }

    public function verify (Request $userInfo){
            // var_dump($userInfo);
            $userId = 0;
            $userDetails = [];
            $response = collect();
            $message = '';
            $userIdWithEmail = User::select('id')->where('email', $userInfo->email)->first();
            $userIdWithPassword = User::select('id')->where('password', $userInfo->password)->first();
            
            $userId = $userIdWithEmail == '' ? $userIdWithPassword : $userIdWithEmail;
            if($userId === null) {
                $message = "Incorrect email and password";
                $userDetails =[];
            }else{
                $userDetails = User::find($userId -> id);
                if($userDetails -> email != $userInfo -> email AND $userDetails -> password == $userInfo -> password){
                    $message = 'Incorrect email!';

                }elseif($userDetails -> email === $userInfo -> email AND $userDetails -> password != $userInfo -> password){
                    $message ="Incorrect password!";

                }else{

                    $message = "Credentials matched!";
                    
                }
            }
            $response = collect([['message' => $message]]);
            if($message == "Credentials matched!"){
                $token = $userDetails -> createToken('loginAccess');
                $response-> push([['token' => $token->plainTextToken]]);
            }else{
                $token = "";
                $response-> push([['token' => $token]]);
            }
            
            $response -> push([['account' => $userDetails]]);
            
            return $response;
        

    }
}
