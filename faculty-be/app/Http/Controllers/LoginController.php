<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SecurityQuestion;
use Laravel\Sanctum\NewAccessToken;
use Illuminate\Support\Facades\DB;
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
            $token = "";
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
                $id = $userDetails->id;
            
                $image =  asset('storage/profile/user-profile/' . $userDetails->profile);
                $userDetails->profile = $image;
                $securityQuestion = DB::table('security_question')->where('user_id', $id )->get();
                $token = $userDetails -> createToken('loginAccess');
                $response-> push([['token' => $token->plainTextToken]]);
                $response-> push([['security' => $securityQuestion]]);
            }
            
            $response -> push([['account' => $userDetails]]);
            
            return $response;
        

    }

    public function forgotPassword(Request $request){
        $user = DB::table('users')->where('email', $request -> email)->get();
        if(count($user) == 0){
            return 'Email does not exist!';
        }
        $id = $user[0]->id;
        $securityQuestion = DB::table('security_question')->where('user_id', $id )->get();
        $security = $securityQuestion[0];
        if($security->question_one != $request -> securityQ1 || $security -> question_two != $request -> securityQ2 ||
         $security -> question_three != $request -> securityQ3 ){
             return 'Incorrect Answer/s';
         }
        else{
            $updated = DB::table('users')->where('id', $id)->update([
                'password' => $request -> password 
            ]);
            try {
               if($updated > 0) {
                return 'success';
               }
                
            
        } catch (Throwable $e) {
            return $e;
        }
           
        } 


    }

   
}
