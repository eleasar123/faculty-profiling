<?php

namespace App\Http\Controllers;

use App\Models\IpcrfDemographicProfile;
use App\Models\IpcrfDevelopmentPlan;
use App\Models\IpcrfEncodingPart1;
use App\Models\IpcrfEncodingPart2;
use Illuminate\Http\Request;

class IpcrfController extends Controller
{
    public function index()
    {
        $ipcrf = collect();
        $ipcrf->push([['ipcrfDemographicProfile' => IpcrfDemographicProfile::all()]]);
        $ipcrf->push([['ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan::all()]]);
        $ipcrf->push([['ipcrfEncodingPart1' => IpcrfEncodingPart1::all()]]);
        $ipcrf->push([['ipcrfEncodingPart2' => IpcrfEncodingPart2::all()]]);

        try {
            return $ipcrf;
        } catch (Throwable $error) {
            return $error;
        }
    }

    public function getIpcrf(Request $request)
    {
        $ipcrf = collect();
        $ipcrf->push([['ipcrfDemographicProfile' => IpcrfDemographicProfile::find($request->user)]]);
        $ipcrf->push([['ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan::find($request->user)]]);
        $ipcrf->push([['ipcrfEncodingPart1' => IpcrfEncodingPart1::find($request->user)]]);
        $ipcrf->push([['ipcrfEncodingPart2' => IpcrfEncodingPart2::find($request->user)]]);

        try {
            return $ipcrf;
        } catch (Throwable $error) {
            return $error;
        }
    }

    public function createIpcrf(Request $request)
    {
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
            'user_id' => $request->user,
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
            'school_year' => $request -> schoolYear
        ]);

        $ipcrfEncodingPart1 = new IpcrfEncodingPart1([
            'user_id' => $request->user,
            'subject_cot1' => $request->subject_cot1,
            'objective_no' => $request->objective_no,
            'cot_indicator_no' => $request->cot_indicator_no,
            'rating_cot1' => $request->rating_cot1,
            'rpms_5pt_scale_cot1' => $request->rpms_5pt_scale_cot2,
            'cot3' => $request->cot4,
            'cot4' => $request->cot4,
            'average_cot' => $request->average_cot,
            'ipcrf_numerical_ratings_q' => $request->ipcrf_numerical_ratings_q,
            'ipcrf_numerical_ratings_e' => $request->ipcrf_numerical_ratings_e,
            'ipcrf_numerical_ratings_average' => $request->ipcrf_numerical_ratings_average,
            'ipcrf_numerical_ratings_score' => $request->ipcrf_numerical_ratings_average,
            'ipcrf_numerical_ratings_adjectival_rating' => $request->ipcrf_numerical_ratings_adjectival_rating,
            'school_year' => $request->school_year,
            'date_observed' => $request->date_observed,
            'final_rating' => $request->final_rating,
            'adjectival_rating' => $request->adjectival_rating,
            'approving_authority' => $request->approving_authority,
            'approver_position' => $request->approver_position,
        ]);

        $ipcrfEncodingPart2 = new IpcrfEncodingPart2([
            'user_id' => $request->user,
            'self_management' => $request->self_management,
            'teamwork' => $request->teamwork,
            'professional_and_ethics' => $request->professional_and_ethics,
            'service_orientation' => $request->service_orientation,
            'results_focus' => $request->results_focus,
            'innovation' => $request->innovation,
        ]);

        $ipcrfDevelopmentPlan = new IpcrfDevelopmentPlan([
            'user_id' => $request->user,
            'ratee' => $request->ratee,
            'competency_type' => $request->competency_type,
            'rater' => $request->rater,
            'strengths' => $request->strengths,
            'development_needs' => $request->development_needs,
            'learning_objectives' => $request->learning_objectives,
            'timeline' => $request->timeline,
            'intervention' => $request->intervention,
            'resources_needed' => $request->resources_needed,
            'approving_authority' => $request->approving_authority,
        ]);

        try {
            $ipcrfDemographicProfile->save();
            $ipcrfEncodingPart1->save();
            $ipcrfEncodingPart2->save();
            $ipcrfDevelopmentPlan->save();
            return "Success";
        } catch (Throwable $error) {
            return $error;
        }
    }

    public function editIpcrf(Request $request, $user_id)
    {
        $request->validate([
            //demographic profile
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

        $ipcrfDemographicProfile = IpcrfDemographicProfile::find($user_id);
        $ipcrfDemographicProfile->name_of_employee = $request->name_of_employee;
        $ipcrfDemographicProfile->position = $request->position;
        $ipcrfDemographicProfile->employment_status = $request->position;
        $ipcrfDemographicProfile->age = $request->age;
        $ipcrfDemographicProfile->sex = $request->sex;
        $ipcrfDemographicProfile->level_taught = $request->level_taught;
        $ipcrfDemographicProfile->grade_level_taught = $request->grade_level_taught;
        $ipcrfDemographicProfile->subject_taught = $request->subject_taught;
        $ipcrfDemographicProfile->rater = $request->rater;
        $ipcrfDemographicProfile->rater_position = $request->rater_position;
        $ipcrfDemographicProfile->date_of_review = $request->date_of_review;
        $ipcrfDemographicProfile->rating_period = $request->rating_period;
        $ipcrfDemographicProfile->number_of_years_teaching = $request->number_of_years_teaching;
        $ipcrfDemographicProfile->highest_degree_obtained = $request->highest_degree_obtained;
        $ipcrfDemographicProfile->area_of_specialization = $request->area_of_specialization;
        $ipcrfDemographicProfile->region = $request->region;
        $ipcrfDemographicProfile->division = $request->division;
        $ipcrfDemographicProfile->district = $request->district;
        $ipcrfDemographicProfile->school_id = $request->school_id;
        $ipcrfDemographicProfile->school_name = $request->school_name;
        $ipcrfDemographicProfile->school_type = $request->school_type;
        $ipcrfDemographicProfile->school_size = $request->user;
        $ipcrfDemographicProfile->curricular_classification = $request->curricular_classification;

        $ipcrfEncodingPart1 = IpcrfEncodingPart1::find($user_id);
        $ipcrfEncodingPart1->objective1 = $request->objective1;
        $ipcrfEncodingPart1->objective2 = $request->objective2;
        $ipcrfEncodingPart1->objective3 = $request->objective3;
        $ipcrfEncodingPart1->objective4 = $request->objective4;
        $ipcrfEncodingPart1->objective5 = $request->objective5;
        $ipcrfEncodingPart1->subject = $request->subject;
        $ipcrfEncodingPart1->objective6 = $request->object6;
        $ipcrfEncodingPart1->objective7 = $request->objective7;
        $ipcrfEncodingPart1->objective8 = $request->objective8;
        $ipcrfEncodingPart1->objective9 = $request->objective9;
        $ipcrfEncodingPart1->objective10 = $request->objective10;
        $ipcrfEncodingPart1->school_year = $request->school_year;
        $ipcrfEncodingPart1->personnel = $request->personnel;
        $ipcrfEncodingPart1->date_observed = $request->date_observed;
        $ipcrfEncodingPart1->final_rating = $request->final_rating;
        $ipcrfEncodingPart1->adjectival_rating = $request->adjectival_rating;
        $ipcrfEncodingPart1->approving_authority = $request->approving_authority;
        $ipcrfEncodingPart1->approver_position = $request->approver_position;

        $ipcrfEncodingPart2 = IpcrfEncodingPart2::find($user_id);
        $ipcrfEncodingPart2->user = $request->user;
        $ipcrfEncodingPart2->self_management = $request->self_management;
        $ipcrfEncodingPart2->teamwork = $request->teamwork;
        $ipcrfEncodingPart2->professional_and_ethics = $request->professional_and_ethics;
        $ipcrfEncodingPart2->service_orientation = $request->service_orientation;
        $ipcrfEncodingPart2->results_focus = $request->results_focus;
        $ipcrfEncodingPart2->innovation = $request->innovation;

        $ipcrfDevelopmentPlan = IpcrfDevelopmentPlan::find($user_id);
        $ipcrfDevelopmentPlan->user = $request->user;
        $ipcrfDevelopmentPlan->ratee = $request->ratee;
        $ipcrfDevelopmentPlan->competency_type = $request->competency_type;
        $ipcrfDevelopmentPlan->rater = $request->rater;
        $ipcrfDevelopmentPlan->strengths = $request->strengths;
        $ipcrfDevelopmentPlan->development_needs = $request->development_needs;
        $ipcrfDevelopmentPlan->learning_objectives = $request->learning_objectives;
        $ipcrfDevelopmentPlan->timeline = $request->timeline;
        $ipcrfDevelopmentPlan->resources_needed = $request->resources_needed;
        $ipcrfDevelopmentPlan->approving_authority = $request->approving_authority;

        try {
            $ipcrfDemographicProfile->save();
            $ipcrfEncodingPart1->save();
            $ipcrfEncodingPart2->save();
            $ipcrfDevelopmentPlan->save();
            return "Success";
        } catch (Throwable $error) {
            return $error;
        }
    }
}
