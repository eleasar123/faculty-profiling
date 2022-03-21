<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MasterfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function () {
        return view('welcome');
    });

    // Route::apiResourgetce('showAge', MasterfileController::class,'showAgeRange');
    Route::apiResource('/user', UserController::class);
    Route::apiResource('pds', PersonalInfoController::class);
    Route::post('login', 'App\Http\Controllers\LoginController@index');
    Route::get('/age', 'App\Http\Controllers\MasterfileController@age');



