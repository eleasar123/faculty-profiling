<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EsatDemographicProfile;
use App\Models\EsatCoreBehavioralCompetencies;
use App\Models\EsatFunctionalObjectives;
class EsatController extends Controller
{
    //

    public function index(){
        //another option is to use a loop 
        $esat = collect();
        $esat->push([['esatDemographicProfile' => EsatDemographicProfile :: all() ]]);
        $esat->push([['esatCoreBehavioralCompetencies' => EsatCoreBehavioralCompetencies :: all() ]]);
        $esat->push([['esatFunctionalObjectives' => EsatFunctionalObjectives :: all() ]]);
        try{  
            return $esat;
        }catch(Throwable $error){
            return $error;
        }
    }

    public function getEsat($id){
        $esat = collect();
        $esat->push([['esatDemographicProfile' => EsatDemographicProfile :: find($id) ]]);
        $esat->push([['esatCoreBehavioralCompetencies' => EsatCoreBehavioralCompetencies :: find($id) ]]);
        $esat->push([['esatFunctionalObjectives' => EsatFunctionalObjectives :: find($id) ]]);

        try{  
            return $esat;
        }catch(Throwable $error){
            return $error;
        }
    }

    public function createEsat(Request $request){
        
        $request->validate([
            //demographic profile
            'user' => 'required',
            'name_of_employee'=> 'required',
            'position'=> 'required',
            'employment_status'=> 'required',
            'age'=> 'required',
            'sex'=> 'required',
            'years_in_teaching'=> 'required',
            'highest_degree_obtained'=> 'required',
            'region'=> 'required',
            'division'=> 'required',
            'school'=> 'required',
            'curricular_classification'=> 'required',
            'grade_level_taught'=> 'required',
            'area_of_specialization'=> 'required',
            'subjects_taught'=> 'required',
            //core behavioral competencies
            'objectives_no'=> 'required',
            'objectives_details'=> 'required',
            'check_status'=> 'required',
            //functional objectives
            'objectives_no'=> 'required',
            'objectives_details'=> 'required',
            'level_of_capability'=> 'required',
            'priority_for_development'=> 'required',
        ]);

        $esatDemographicProfile = new EsatDemographicProfile([
            'user' => $request->user,
            'name_of_employee'=> $request->name_of_employee,
            'position'=> $request->position,
            'employment_status'=> $request->employment_status,
            'age'=> $request->age,
            'sex'=> $request->sex,
            'years_in_teaching'=> $request->years_in_teaching,
            'highest_degree_obtained'=> $request->highest_degree_obtained,
            'region'=> $request->region,
            'division'=> $request->division,
            'school'=> $request->school,
            'curricular_classification'=> $request->curricular_classification,
            'grade_level_taught'=> $request->grade_level_taught,
            'area_of_specialization'=> $request->area_of_specialization,
            'subjects_taught'=> $request->subjects_taught,
        ]);

        $esatCoreBehavioralCompetencies = new EsatCoreBehavioralCompetencies([
            'user' => $request->user,
            'objectives_no'=> $request->objectives_no,
            'objectives_details'=> $request->objectives_details,
            'check_status'=> $request->check_status
        ]);

        $esatFunctionalObjectives = new EsatFunctionalObjectives([
            'user' => $request->user,
            'objectives_no'=> $request->objectives_no,
            'objectives_details'=> $request->objectives_details,
            'level_of_capability'=> $request->level_of_capability,
            'priority_for_development'=> $request->priority_for_development,
        ]);

        try{
            $esatDemographicProfile->save(); 
            $esatCoreBehavioralCompetencies->save();
            $esatFunctionalObjectives->save();
            return "success";
        }catch(Throwable $error){
            return $error;
        }
    }
}
