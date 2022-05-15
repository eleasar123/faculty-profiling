<?php

namespace App\Http\Controllers;

use App\Models\EsatCoreBehavioralCompetencies;
use App\Models\EsatDemographicProfile;
use App\Models\EsatFunctionalObjectives;
use App\Models\User;
use Illuminate\Http\Request;

class EsatController extends Controller
{
    public function index()
    {
        //another option is to use a loop

        $esat = collect();
        $esat->push([['esatDemographicProfile' => EsatDemographicProfile::all()]]);
        $esat->push([['esatCoreBehavioralCompetencies' => EsatCoreBehavioralCompetencies::all()]]);
        $esat->push([['esatFunctionalObjectives' => EsatFunctionalObjectives::all()]]);
        return $esat;
    }

    public function getEsat(Request $request)
    {

        $esat = collect();
        $esat->push([['esatDemographicProfile' => EsatDemographicProfile::all()]]);
        $esat->push([['esatCoreBehavioralCompetencies' => EsatCoreBehavioralCompetencies::all()]]);
        $esat->push([['esatFunctionalObjectives' => EsatFunctionalObjectives::all()]]);
        return $esat;
    }

    public function createEsat(Request $request)
    {
        // return $request;
        // return $request->coreBehavioralCompetencies;
        $request->validate([

            //demographic profile
            'userId' => 'required',
            'employeeName' => 'required',
            'employeeId' => 'required',
            'position' => 'required',
            'employmentStatus' => 'required',
            'employeeAge' => 'required',
            'employeeSex' => 'required',

            'yearsInTeaching' => 'required',
            'highestDegreeObtained' => 'required',
            'specifiedHighestDegreeObtained' => 'required',
            'levelTaught' => 'required',
            'gradeLevelTaught' => 'required',

            'region' => 'required',
            'division' => 'required',
            'employeeMunicipality' => 'required',
            'schoolId' => 'required',
            'schoolName' => 'required',
            'schoolType' => 'required',
            'schoolSize' => 'required',
            'curricularClassification' => 'required',
            'specifyAreaofSpecialization' => 'required',
            'specifySubjectsTaught' => 'required',

            //core behavioral competencies
            // 'objectiveNo',
            // 'value',
            // 'functionalObjectives' => 'required',
            // 'coreBehavioralCompetencies' => 'required',

            // //functional objectives
            // 'objectiveNo',
            // 'capability',
            // 'priority',
        ]);

        $esatDemographicProfile = new EsatDemographicProfile([
            'user_id' => $request->userId,
            'name_of_employee' => $request->employeeName,
            'employee_id' => $request->employeeId,
            'position' => $request->position,
            'employment_status' => $request->employmentStatus,
            'age' => $request->employeeAge,
            'sex' => $request->employeeSex,

            'years_in_teaching' => $request->yearsInTeaching,
            'highest_degree_obtained' => $request->highestDegreeObtained,
            'specified_highest_degree_obtained' => $request->specifiedHighestDegreeObtained,
            'level_taught' => $request->levelTaught,
            'grade_level_taught' => $request->gradeLevelTaught,

            'region' => $request->region,
            'division' => $request->division,
            'employee_municipality' => $request->employeeMunicipality,
            'school_id' => $request->schoolId,
            'school_name' => $request->schoolName,
            'school_type' => $request->schoolType,
            'school_size' => $request->schoolSize,
            'curricular_classification' => $request->curricularClassification,
            'area_of_specialization' => $request->specifyAreaofSpecialization,
            'subjects_taught' => $request->specifySubjectsTaught,
            'personal_comments' => $request->personalComments,
        ]);

        foreach ($request->coreBehavioralCompetencies as $coreBehavioral) {
            $esatCoreBehavioralCompetencies = new EsatCoreBehavioralCompetencies([
                'user_id' => $request->userId,
                'objectives_no' => $coreBehavioral['objectiveNo'],
                'check_status' => $coreBehavioral['value'],
            ]);
            try {
                $esatCoreBehavioralCompetencies->save();
            } catch (Throwable $e) {
                return $e;
            }
        }

        foreach ($request->functionalObjectives as $funcObj) {
            $esatFunctionalObjectives = new EsatFunctionalObjectives([
                'user_id' => $request->userId,
                'objectives_no' => $funcObj['objectiveNo'],
                'level_of_capability' => $funcObj['capability'],
                'priority_for_development' => $funcObj['priority'],
            ]);
            try {
                $esatFunctionalObjectives->save();
            } catch (Throwable $e) {
                return $e;
            }
        }

        try {
            $esatDemographicProfile->save();
        } catch (Throwable $error) {
            return $error;
        }
    }

    public function editEsat(Request $request)
   
    {
        return $request;
        $request->validate([
            //demographic profile
            'user' => 'required',
            'name_of_employee' => 'required',
            'position' => 'required',
            'employment_status' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'years_in_teaching' => 'required',
            'highest_degree_obtained' => 'required',
            'region' => 'required',
            'division' => 'required',
            'school' => 'required',
            'curricular_classification' => 'required',
            'grade_level_taught' => 'required',
            'area_of_specialization' => 'required',
            'subjects_taught' => 'required',

            //core behavioral competencies
            'objectives_no' => 'required',
            'objectives_details' => 'required',
            'check_status' => 'required',

            //functional objectives
            'objectives_no' => 'required',
            'objectives_details' => 'required',
            'level_of_capability' => 'required',
            'priority_for_development' => 'required',
        ]);

        $esatDemographicProfile = esatDemographicProfile::find($user_id);
        $esatDemographicProfile->name_of_employee = $request->name_of_employee;
        $esatDemographicProfile->position = $request->position;
        $esatDemographicProfile->employment_status = $request->employment_status;
        $esatDemographicProfile->age = $request->age;
        $esatDemographicProfile->sex = $request->sex;
        $esatDemographicProfile->years_in_teaching = $request->years_in_teaching;
        $esatDemographicProfile->highest_degree_obtained = $request->highest_degree_obtained;
        $esatDemographicProfile->region = $request->region;
        $esatDemographicProfile->division = $request->division;
        $esatDemographicProfile->school = $request->school;
        $esatDemographicProfile->curricular_classification = $request->curricular_classification;
        $esatDemographicProfile->grade_level_taught = $request->grade_level_taught;
        $esatDemographicProfile->area_of_specialization = $request->area_of_specialization;
        $esatDemographicProfile->subjects_taught = $request->subjects_taught;

        $esatCoreBehavioralCompetencies = EsatCoreBehavioralCompetencies::find($user_id);
        $esatCoreBehavioralCompetencies->objectives_no = $request->objectives_no;
        $esatCoreBehavioralCompetencies->objectives_details = $request->objectives_details;
        $esatCoreBehavioralCompetencies->heck_status = $request->check_status;

        $esatFunctionalObjectives = EsatFunctionalObjectives::find($user_id);
        $esatFunctionalObjectives->objectives_no = $request->objectives_no;
        $esatFunctionalObjectives->objectives_details = $request->objectives_details;
        $esatFunctionalObjectives->level_of_capability = $request->level_of_capability;
        $esatFunctionalObjectives->priority_for_development = $request->priority_for_development;

        try {
            $esatDemographicProfile->save();
            $esatCoreBehavioralCompetencies->save();
            $esatFunctionalObjectives->save();
        } catch (Throwable $error) {
            return $error;
        }
    }
}
