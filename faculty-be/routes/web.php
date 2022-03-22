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


    // MasterfileController
    Route::get('showSubject', MasterfileController::class,'showSubject');
    Route::get('showAge', MasterfileController::class,'showAgeRange');
    Route::get('showEmployment', MasterfileController::class,'showEmploymentStatus');
    Route::get('showSuffix', MasterfileController::class,'showSuffix');
    Route::get('showGradeLevelTaught', MasterfileController::class,'showGradeLevelTaught');
    Route::get('showRaterPosition', MasterfileController::class,'showRaterPosition');
    Route::get('showApproverPosition', MasterfileController::class,'showApproverPosition');
    Route::get('showRegion', MasterfileController::class,'showRegion');
    Route::get('showSex', MasterfileController::class,'showSex');
    Route::get('showDivision', MasterfileController::class,'showDivision');
    Route::get('showSchoolSize', MasterfileController::class,'showSchoolSize');
    Route::get('showCurricularClassification', MasterfileController::class,'showCurricularClassification');
    Route::get('showAreaOfSpecialization', MasterfileController::class,'showAreaOfSpecialization');
    Route::get('showSchoolType', MasterfileController::class,'showSchoolType');
    Route::get('showYearsOfTraining', MasterfileController::class,'showYearsOfTraining');
    Route::get('showRole', MasterfileController::class,'showRole');
    Route::get('showLevelTaught', MasterfileController::class,'showLevelTaught');
    Route::get('showSubjectsTaught', MasterfileController::class,'showSubjectsTaught');
    Route::get('showHighestDegreeObtained', MasterfileController::class,'showHighestDegreeObtained');
    Route::get('showPersonnelPosition', MasterfileController::class,'showPersonnelPosition');

    Route::apiResource('/user', UserController::class);
    Route::apiResource('pds', PersonalInfoController::class);
    Route::post('login', 'App\Http\Controllers\LoginController@index');

    Route::post('login', 'App\Http\Controllers\LoginController@verify');

    // Route::apiresource('user', App\Http\Controllers\UserController::class);
    //routes for users
    Route::get('user/', 'App\Http\Controllers\UserController@index');
    Route::get('user/{id}', 'App\Http\Controllers\UserController@getUser');
    Route::post('user/create', 'App\Http\Controllers\UserController@createUser');
    Route::patch('user/edit/{id}', 'App\Http\Controllers\UserController@editUser');
    Route::delete('user/delete/{id}', 'App\Http\Controllers\UserController@deleteUser');

    // Route::apiResource('pds', App\Http\Controllers\PersonalInfoController::class);
    //routes for pds
    Route::get('pds/', 'App\Http\Controllers\PersonalInfoController@index');
    Route::get('pds/{id}', 'App\Http\Controllers\PersonalInfoController@getPds');
    Route::post('pds/create', 'App\Http\Controllers\PersonalInfoController@createUser');

    // Route::apiResource('esat', App\Http\Controllers\EsatController::class);
    //routes for esat
    Route::get('esat/', 'App\Http\Controllers\EsatController@index');
    Route::get('esat/{id}', 'App\Http\Controllers\EsatController@getEsat');
    Route::post('esat/create', 'App\Http\Controllers\EsatController@createEsat');

    // Route::apiResource('ipcrf', App\Http\Controllers\IpcrfController::class);
    //routes for ipcrf
    Route::get('ipcrf/', 'App\Http\Controllers\EsatController@index');
    Route::get('ipcrf/{id}', 'App\Http\Controllers\EsatController@getIpcrf');
    Route::post('ipcrf/create', 'App\Http\Controllers\EsatController@createIpcrf');

    //Route::apiResource('masterfile', App\Http\Controllers\EsatController::class);
    //routes for masterfile
    Route::get('masterfile/subjectCot1', 'App\Http\Controllers\MasterfileController@showSubjectCot1');
    
   



