<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MasterfileController extends Controller
{
    //
    public function index(){
        return User::all();
    }
}
