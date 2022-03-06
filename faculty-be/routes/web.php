<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('user', App\Http\Controllers\UserController::class);
Route::post('login', 'App\Http\Controllers\LoginController@userLogin');
// Route::get('/user', 'UserController@index');
// Route::get('user/{id}', 'UserController@show');
//Route::get('/contacts', 'ContactController@create');
// Route::resource('contacts', App\Http\Controllers\ContactController::class);
//Route::apiResource('contacts', 'ContactController'); //used to expose a a RESTful API excluding the routes for serving HTML
