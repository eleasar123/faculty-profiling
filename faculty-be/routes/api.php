<?php

use Illuminate\Http\Request;    
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['cors'])->group(function () {
    //Route::post('/hogehoge', 'Controller@hogehoge');

    Route::get('articles/', "App\Http\Controllers\ArticlesController@index");
    Route::get('articles/{id}', "App\Http\Controllers\ArticlesController@getArticle");
    Route::post('articles/create', "App\Http\Controllers\ArticlesController@createArticle");
    Route::post('articles/edit', "App\Http\Controllers\ArticlesController@editArticle");
    Route::delete('articles/delete/{id}', "App\Http\Controllers\ArticlesController@deleteArticle");
    // Route::get('articles/', "App\Http\Controllers\Controller\ArticleController@index");






    // MasterfileController
    //routes for masterfile
    Route::get('masterfile/showSubject', 'MasterfileController@showSubjectCot1');
    Route::get('showAge', 'MasterfileController@showAgeRange');
    Route::get('showEmployment', 'MasterfileController@showEmploymentStatus');
    Route::get('showSuffix', 'MasterfileController@showSuffix');
    Route::get('showGradeLevelTaught', 'MasterfileController@showGradeLevelTaught');
    Route::get('showRaterPosition', 'MasterfileController@showRaterPosition');
    Route::get('showApproverPosition', 'MasterfileController@showApproverPosition');
    Route::get('showRegion', 'MasterfileController@showRegion');
    Route::get('showSex', 'MasterfileController@showSex');
    Route::get('showDivision', 'MasterfileController@showDivision');
    Route::get('showSchoolSize', 'MasterfileController@showSchoolSize');
    Route::get('showCurricularClassification', 'MasterfileController@showCurricularClassification');
    Route::get('showAreaOfSpecialization', 'MasterfileController@showAreaOfSpecialization');
    Route::get('showSchoolType', 'MasterfileController@showSchoolType');
    Route::get('showYearsOfTraining', 'MasterfileController@showYearsOfTraining');
    Route::get('showRole', 'MasterfileController@showRole');
    Route::get('showLevelTaught', 'MasterfileController@showLevelTaught');
    Route::get('showSubjectsTaught', 'MasterfileController@showSubjectsTaught');
    Route::get('showHighestDegreeObtained', 'MasterfileController@showHighestDegreeObtained');
    Route::get('showPersonnelPosition', 'MasterfileController@showPersonnelPosition');

    // Route::apiResource('/user', UserController::class);
    // Route::apiResource('pds', PersonalInfoController::class);
    //Route::post('login', 'App\Http\Controllers\LoginController@index');

    Route::post('login', 'App\Http\Controllers\LoginController@verify');
    Route::post('forgotPass', 'App\Http\Controllers\LoginController@forgotPassword');
  
    // Route::apiresource('user', App\Http\Controllers\UserController::class);
    //routes for users
    Route::get('user/', 'App\Http\Controllers\UserController@index');
    Route::get('user/{id}', 'App\Http\Controllers\UserController@getUser');
    Route::get('user/securityQuestion/{id}', 'App\Http\Controllers\UserController@getSecurityQuestion');
    Route::post('user/create', 'App\Http\Controllers\UserController@createUser');
    Route::post('user/edit', 'App\Http\Controllers\UserController@editUserSchoolHead');
    Route::post('user/editProfile', 'App\Http\Controllers\UserController@editProfile');
    Route::post('user/editTeacherProfile', 'App\Http\Controllers\UserController@editUserTeacher');
    Route::delete('user/delete/{id}', 'App\Http\Controllers\UserController@deleteUser');

    // Route::apiResource('pds', App\Http\Controllers\PersonalInfoController::class);
    //routes for pds
    Route::get('pds/', 'App\Http\Controllers\PersonalInfoController@index');
    Route::get('pds/{id}', 'App\Http\Controllers\PersonalInfoController@getPds');
    Route::get('pds/getImage/{id}', 'App\Http\Controllers\PersonalInfoController@getImage');
    Route::post('pds/create', 'App\Http\Controllers\PersonalInfoController@createPds');
    Route::post('pds/update', 'App\Http\Controllers\PersonalInfoController@editPds');
    Route::post('pds/handleImage', 'App\Http\Controllers\PersonalInfoController@handleImage');
    // Route::apiResource('esat', App\Http\Controllers\EsatController::class);
    //routes for esat
    Route::get('esat/', 'App\Http\Controllers\EsatController@index');
    Route::get('esat/{id}', 'App\Http\Controllers\EsatController@getEsat');
    Route::post('esat/create', 'App\Http\Controllers\EsatController@createEsat');
    Route::post('esat/edit', 'App\Http\Controllers\EsatController@editEsat');

    // Route::apiResource('ipcrf', App\Http\Controllers\IpcrfController::class);
    //routes for ipcrf
    Route::get('ipcrf/', 'App\Http\Controllers\IpcrfController@index');
    Route::get('ipcrf/{id}', 'App\Http\Controllers\IpcrfController@getIpcrf');
    Route::post('ipcrf/getBySchoolYear', 'App\Http\Controllers\IpcrfController@getIpcrfBySchoolYear');
    Route::post('ipcrf/createPart1', 'App\Http\Controllers\IpcrfController@createIpcrfPart1');
    Route::post('ipcrf/createPart2', 'App\Http\Controllers\IpcrfController@createPart2');
    Route::post('ipcrf/createPart4', 'App\Http\Controllers\IpcrfController@createPart4');
    Route::post('ipcrf/updatePart1', 'App\Http\Controllers\IpcrfController@updatePart1');
    Route::post('ipcrf/updatePart2', 'App\Http\Controllers\IpcrfController@updatePart2');
    Route::post('ipcrf/updatePart4', 'App\Http\Controllers\IpcrfController@updatePart4');
    //Route::apiResource('masterfile', App\Http\Controllers\EsatController::class);

});
