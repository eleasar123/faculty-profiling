<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\IpcrfDemographicProfile;
use App\Models\IpcrfDevelopmentPlan;
use App\Models\IpcrfEncodingPart1;
use App\Models\IpcrfEncodingPart2;

class IpcrfController extends Controller
{
    //
    public function index(){
        //
        $ipcrf = collect();
        $ipcrf->push([['ipcrfDemographicProfile' => IpcrfDemographicProfile :: all() ]]);
        $ipcrf->push([['ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan :: all() ]]);
        $ipcrf->push([['ipcrfEncodingPart1' => IpcrfEncodingPart1 :: all() ]]);
        $ipcrf->push([['ipcrfEncodingPart2' => IpcrfEncodingPart2 :: all() ]]);

        try{
            return $ipcrf;
        }catch(Throwable $error){
            return $error;
        }
    }

    public function getIpcrf(Request $request){
        $ipcrf = collect();
        $ipcrf->push([['ipcrfDemographicProfile' => IpcrfDemographicProfile :: find($request->user) ]]);
        $ipcrf->push([['ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan :: find($request->user) ]]);
        $ipcrf->push([['ipcrfEncodingPart1' => IpcrfEncodingPart1 :: find($request->user) ]]);
        $ipcrf->push([['ipcrfEncodingPart2' => IpcrfEncodingPart2 :: find($request->user) ]]);

        try{
            return $ipcrf;
        }catch(Throwable $error){
            return $error;
        }
    }

    public function createIpcrf(Request $request){

        $request->validate([
            //demographic profile
            'user',
            'name_of_employee',
            'position',
            'employment_status',
            'age',
            'sex',
            'level_taught',
            'grade_level_taught',
            'subject_taught',
            'rater',
            'rater_position',
            'date_of_review',
            'rating_period',
            'number_of_years_teaching',
            'highest_degree_obtained',
            'area_of_specialization',
            'region',
            'division',
            'district/municipality',
            'school_id',
            'school_name',
            'school_type',
            'school_size',
            'curricular_classification',
            //ipcrf part 1 encoding
            'objective1',
            'objective2',
            'objective3',
            'objective4',
            'objective5',
            'subject',
            'objective6',
            'objective7',
            'objective8',
            'objective9',
            'objective10',
            'school_year',
            'personnel',
            'date_observed',
            'final_rating',
            'adjectival_rating',
            'approving_authority',
            'approver_position',
            //ipcrf part 2 encoding
            'self_management',
            'teamwork',
            'professional_and_ethics',
            'service_orientation',
            'results_focus',
            'innovation',
            //ipcrf development plan
            'ratee',
            'competency_type',
            'rater',
            'strengths',
            'development_needs',
            'learning_objectives',
            'timeline',
            'resources_needed',
            'approving_authority',
        ]);

        $ipcrfDemographicProfile = new IpcrfDemographicProfile([
            'user' => $request->user,
            'name_of_employee' => $request->name_of_employee,
            'position' => $request->position,
            'employment_status' => $request->position,
            'age' => $request->age,
            'sex' => $request->sex,
            'level_taught' => $request->level_taught,
            'grade_level_taught' => $request->grade_level_taught,
            'subject_taught' => $request->subject_taught,
            'rater' => $request->rater,
            'rater_position' => $request->rater_position,
            'date_of_review' => $request->date_of_review,
            'rating_period' => $request->rating_period,
            'number_of_years_teaching' => $request->number_of_years_teaching,
            'highest_degree_obtained' => $request->highest_degree_obtained,
            'area_of_specialization' => $request->area_of_specialization,
            'region' => $request->region,
            'division' => $request->division,
            'district/municipality' => $request->district,
            'school_id' => $request->school_id,
            'school_name' => $request->school_name,
            'school_type' => $request->school_type,
            'school_size' => $request->user,
            'curricular_classification' => $request->curricular_classification,
        ]);

        $ipcrfEncodingPart1 = new IpcrfEncodingPart1([
            'user' => $request->user,
            'objective1' => $request->objective1,
            'objective2' => $request->objective2,
            'objective3' => $request->objective3,
            'objective4' => $request->objective4,
            'objective5' => $request->objective5,
            'subject' => $request->subject,
            'objective6' => $request->object6,
            'objective7' => $request->objective7,
            'objective8' => $request->objective8,
            'objective9' => $request->objective9,
            'objective10' => $request->objective10,
            'school_year' => $request->school_year,
            'personnel' => $request->personnel,
            'date_observed' => $request->date_observed,
            'final_rating' => $request->final_rating,
            'adjectival_rating' => $request->adjectival_rating,
            'approving_authority' => $request->approving_authority,
            'approver_position' => $request->approver_position,
        ]);

        $ipcrfEncodingPart2 = new IpcrfEncodingPart2([
            'user' => $request->user,
            'self_management' => $request->self_management,
            'teamwork' => $request->teamwork,
            'professional_and_ethics' => $request->professional_and_ethics,
            'service_orientation' => $request->service_orientation,
            'results_focus' => $request->results_focus,
            'innovation' => $request->innovation,
        ]);


        $ipcrfDevelopmentPlan = new IpcrfDevelopmentPlan([
            'user' => $request->user,
            'ratee' => $request->ratee,
            'competency_type' => $request->competency_type,
            'rater' => $request->rater,
            'strengths' => $request->strengths,
            'development_needs' => $request->development_needs,
            'learning_objectives' => $request->learning_objectives,
            'timeline' => $request->timeline,
            'resources_needed' => $request->resources_needed,
            'approving_authority' => $request->approving_authority,
        ]);


        try{
            $ipcrfDemographicProfile->save(); 
            $ipcrfEncodingPart1->save();
            $ipcrfEncodingPart2->save();
            $ipcrfDevelopmentPlan->save();
            return "success";
        }catch(Throwable $error){
            return $error;
        }
    }


}
