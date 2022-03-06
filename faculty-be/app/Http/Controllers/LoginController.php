<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    //
    public function userLogin(Request $userInfo){
        var_dump($userInfo);
  
            $user = User::find($userInfo->username);
            $role = $user->password == $userInfo->password ? $user->role : '';
            return $role;
        
    }
}
