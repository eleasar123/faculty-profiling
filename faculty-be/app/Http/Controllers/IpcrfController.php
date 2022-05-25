<?php

namespace App\Http\Controllers;

use App\Models\IpcrfDemographicProfile;
use App\Models\IpcrfDevelopmentPlan;
use App\Models\IpcrfEncodingPart1;
use App\Models\IpcrfEncodingPart2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IpcrfController extends Controller
{
    public function index()
    {
      return [
       'ipcrfDemographicProfile' => IpcrfDemographicProfile::all(),
        'ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan::all(),
        'ipcrfEncodingPart1' => IpcrfEncodingPart1::all(),
        'ipcrfEncodingPart2' => IpcrfEncodingPart2::all()];

    }

    public function getIpcrf($id)
    {
        return[
        'ipcrfDemographicProfile' => IpcrfDemographicProfile::where('user_id', $id)->get(),
        'ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan::where('user_id', $id)->get(),
        'ipcrfEncodingPart1' => IpcrfEncodingPart1::where('user_id', $id)->get(),
        'ipcrfEncodingPart2' => IpcrfEncodingPart2::where('user_id', $id)->get()];


    }

    public function getIpcrfBySchoolYear(Request $request)
    {

        return[
        'ipcrfDemographicProfile' => IpcrfDemographicProfile::where('user_id', $request->user)
        ->where('rating_period', $request->schoolYear)->get(),
        'ipcrfDevelopmentPlan' => IpcrfDevelopmentPlan::where('user_id', $request->user)
        ->where('school_year', $request->schoolYear)->get(),
        'ipcrfEncodingPart1' => IpcrfEncodingPart1::where('user_id', $request->user)
        ->where('school_year', $request->schoolYear)->get(),
        'ipcrfEncodingPart2' => IpcrfEncodingPart2::where('user_id', $request->user)
        ->where('school_year', $request->schoolYear)->get()];

    }

    public function createIpcrfPart1(Request $request)
    {


        $ipcrfDemographicProfile = new IpcrfDemographicProfile([
            'user_id' => $request->user,
            'name_of_employee' => $request->empName,
            'position' => $request->empPosition,
            'employee_id' => $request->empId,
            'employment_status' => $request->empStatus,
            'age' => $request->empAge,
            'sex' => $request->empSex,
            'level_taught' => $request->empLevelTaught,
            'grade_level_taught' => $request->empGradeLevelTaught,
            'subject_taught' => $request->empSubjectTaught,
            'rater' => $request->empRater,
            'rater_position' => $request->empRaterPosition,
            'date_of_review' => $request->empDateReview,
            'rating_period' => $request->empRatingPeriod,
            'number_of_years_teaching' => $request->empYearsOfTeaching,
            'highest_degree_obtained' => $request->empDegree,
            'area_of_specialization' => $request->empSpecialization,
            'region' => $request->empRegion,
            'division' => $request->empDivision,
            'district_municipality' => $request->empDistrict,
            'school_id' => $request->empSchoolId,
            'school_name' => $request->empSchoolName,
            'school_type' => $request->empSchoolType,
            'school_size' => $request->empSchoolSize,
            'curricular_classification' => $request->empCurricularClassification,
            'school_year' => $request -> empRatingPeriod
        ]);





            try {
                $ipcrfDemographicProfile->save();

                return "Success";
            } catch (Throwable $error) {
                return $error;
            }







    }

    public function createPart2(Request $request){
        // return $request;
        $selfManagement = $request->selfManagement1.','. $request->selfManagement2.','. $request->selfManagement3.','.
        $request->selfManagement4.','.$request->selfManagement5;
        $teamwork = $request->teamwork1.','. $request->teamwork2.','. $request->teamwork3.','.
        $request->teamwork4.','.$request->teamwork5;
        $prof = $request->prof1.','. $request->prof2.','. $request->prof3.','.
        $request->prof4.','.$request->prof5;
        $service = $request->service1.','. $request->service2.','. $request->service3.','.
        $request->service4.','.$request->service5;
        $results = $request->results1.','. $request->results2.','. $request->results3.','.
        $request->results4.','.$request->results5;
        $innovation = $request->innnovation1.','. $request->innovation2.','. $request->innovation3.','.
        $request->innovation4.','.$request->innovation5;
        $ipcrfEncodingPart2 = new IpcrfEncodingPart2([
            'user_id' => $request->user,
            'self_management' => $selfManagement,
            'teamwork' => $teamwork,
            'professional_and_ethics' => $prof,
            'service_orientation' => $service,
            'results_focus' => $results,
            'innovation' => $innovation,
            'school_year' => $request->schoolYear,
        ]);
        try {
            $ipcrfEncodingPart2->save();

            return "Success";
        } catch (Throwable $error) {
            return $error;
        }

    }

    public function createPart4(Request $request){
        $ipcrfDevelopmentPlan = new IpcrfDevelopmentPlan([
            'user_id' => $request->user,
            'school_year' => $request->empRatingPeriod,
            'ratee' => $request->rateePart4,
            'rater' => $request->raterPart4,
            'strengths_functional' => $request->strengthsFunctional,
            'strengths_core' => $request->strengthsCore,
            'development_needs_functional' => $request->developmentNeedsFunctional,
            'development_needs_core' => $request->developmentCore,
            'learning_objectives_functional' => $request->learningObjectivesFunctional,
            'learning_objectives_core' => $request->learningObjectivesCore,
            'intervention_functional' => $request->interventionFunctional,
            'intervention_core' => $request->interventionCore,
            'timeline_functional' => $request->timelineFunctional,
            'timeline_core' => $request->timelineCore,
            'feedback' => $request->feedback,
            'resources_needed_functional' => $request->resourcesNeededFunctional,
            'resources_needed_core' => $request->resourcesNeededCore,
            'approving_authority' => $request->approvingAuthorityPart4
        ]);

        try {
            $ipcrfDevelopmentPlan->save();

            return "Success";
        } catch (Throwable $error) {
            return $error;
        }

    }

    public function updatePart1(Request $request)
    {

        if($request->role == 'Admin'){
            DB::table('ipcrf_encoding_part1s')->where('user_id', $request->user)->where('rating_period', $request->empRatingPeriod)->delete();
            $ipcrfRow1 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 1,
                'cot_indicator_no' => $request->cot1IndicatorObjNo1,
                'rating_cot1' => $request->cot1RatingObjNo1,
                'rpms_5pt_scale_cot1' => $request->cot1RpmsObjNo1,
                'rating_cot2' => $request->cot2RatingObjNo1,
                'rpms_5pt_scale_cot2' => $request->cot2RpmsObjNo1,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => $request->encodingAverageObjNo1,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ1,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve1,
                'ipcrf_numerical_ratings_score' => $request->encodingScore1,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating1,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);

            $ipcrfRow2 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 2,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ2,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve2,
                'ipcrf_numerical_ratings_score' => $request->encodingScore2,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating2,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow3 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 3,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ3,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve3,
                'ipcrf_numerical_ratings_score' => $request->encodingScore3,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating3,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow4 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 4,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ4,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve4,
                'ipcrf_numerical_ratings_score' => $request->encodingScore4,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating4,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow5 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 5,
                'cot_indicator_no' => $request->cotIndicatorObjNo5,
                'rating_cot1' => $request->cotRatingObjNo5,
                'rpms_5pt_scale_cot1' => $request->cot1RpmsObjNo5,
                'rating_cot2' => $request->cot2RatingObjNo5,
                'rpms_5pt_scale_cot2' => $request->cot2RpmsObjNo5,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => $request->encodingAverageObjNo5,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ5,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve5,
                'ipcrf_numerical_ratings_score' => $request->encodingScore5,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating5,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow6 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 6,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ4,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => $request->encodingIpcrfNumericalT6,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve4,
                'ipcrf_numerical_ratings_score' => $request->encodingScore2,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating4,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow7 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 7,
                'cot_indicator_no' => $request->cotIndicatorObjNo7,
                'rating_cot1' => $request->cotRatingObjNo7,
                'rpms_5pt_scale_cot1' => $request->cotRpmsObjNo7,
                'rating_cot2' => $request->cot2RatingObjNo5,
                'rpms_5pt_scale_cot2' => $request->cot2RpmsObjNo5,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => $request->encodingAverageObjNo5,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ5,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve5,
                'ipcrf_numerical_ratings_score' => $request->encodingScore5,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating5,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow8 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 8,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ8,
                'ipcrf_numerical_ratings_e' => null,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve8,
                'ipcrf_numerical_ratings_score' => $request->encodingScore8,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating8,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);

            $ipcrfRow9 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 9,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ9,
                'ipcrf_numerical_ratings_e' => $request->encodingIpcrfNumericalE9,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve9,
                'ipcrf_numerical_ratings_score' => $request->encodingScore9,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating9,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow10 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 10,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ10,
                'ipcrf_numerical_ratings_e' => $request->encodingIpcrfNumericalE10,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve10,
                'ipcrf_numerical_ratings_score' => $request->encodingScore9,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating10,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow11 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 11,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ11,
                'ipcrf_numerical_ratings_e' => $request->encodingIpcrfNumericalE11,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve11,
                'ipcrf_numerical_ratings_score' => $request->encodingScore11,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating11,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            $ipcrfRow12 = new IpcrfEncodingPart1([
                'user_id' => $request->user,
                'subject_cot1' => $request->cot1SubjectsTaught,
                'subject_cot2' => $request->cot2SubjectsTaught,
                'objective_no' => 12,
                'cot_indicator_no' => null,
                'rating_cot1' => null,
                'rpms_5pt_scale_cot1' => null,
                'rating_cot2' => null,
                'rpms_5pt_scale_cot2' => null,
                'cot3' => null,
                'cot4' => null,
                'average_cot' => null,
                'ipcrf_numerical_ratings_q' => $request->encodingIpcrfNumericalQ12,
                'ipcrf_numerical_ratings_e' => $request->encodingIpcrfNumericalE12,
                'ipcrf_numerical_ratings_t' => null,
                'ipcrf_numerical_ratings_average' => $request->encodingIpcrfRatingAve12,
                'ipcrf_numerical_ratings_score' => $request->encodingScore12,
                'ipcrf_numerical_ratings_adjectival_rating' => $request->encodingAdjectivalRating12,
                'school_year' => $request->empDateReview,
                'date_observed_cot1' => $request->cot1DateObserved,
                'date_observed_cot2' => $request->cot2DateObserved,
                'final_rating' => $request->empFinalRating,
                'adjectival_rating' => $request->empFinalAdjRating,
                'approving_authority' => $request->part1ApprovingAuthority,
                'approver_position' => $request->approvingPosition,
            ]);
            try {
                $ipcrfRow1->save();
                $ipcrfRow2->save();
                $ipcrfRow3->save();
                $ipcrfRow4->save();
                $ipcrfRow5->save();
                $ipcrfRow6->save();
                $ipcrfRow7->save();
                $ipcrfRow8->save();
                $ipcrfRow9->save();
                $ipcrfRow10->save();
                $ipcrfRow11->save();
                $ipcrfRow12->save();

                return 'success';
            } catch (Throwable $error) {
                return $error;
            }

    }else{
        $affected = DB::table('ipcrf_demographic_profiles')
              ->where('user_id', $request->user)
              ->update(['name_of_employee' => $request->empName,
              'position' => $request->empPosition,
              'employee_id' => $request->empId,
              'employment_status' => $request->empStatus,
              'age' => $request->empAge,
              'sex' => $request->empSex,
              'level_taught' => $request->empLevelTaught,
              'grade_level_taught' => $request->empGradeLevelTaught,
              'subject_taught' => $request->empSubjectTaught,
              'rater' => $request->empRater,
              'rater_position' => $request->empRaterPosition,
              'date_of_review' => $request->empDateReview,
              'rating_period' => $request->empRatingPeriod,
              'number_of_years_teaching' => $request->empYearsOfTeaching,
              'highest_degree_obtained' => $request->empDegree,
              'area_of_specialization' => $request->empSpecialization,
              'region' => $request->empRegion,
              'division' => $request->empDivision,
              'district/municipality' => $request->empDistrict,
              'school_id' => $request->empSchoolId,
              'school_name' => $request->empSchoolName,
              'school_type' => $request->empSchoolType,
              'school_size' => $request->empSchoolSize,
              'curricular_classification' => $request->empCurricularClassification,
              'school_year' => $request -> empRatingPeriod]);

              try{
                if($affected>0){
                   return 'success';
                }
              }catch (Throwable $error) {
                return $error;
            }
        }
    }

    public function updatePart2(Request $request){
        $selfManagement = $request->selfManagement1.','. $request->selfManagement2.','. $request->selfManagement3.','.
        $request->selfManagement4.','.$request->selfManagement5;
        $teamwork = $request->teamwork1.','. $request->teamwork2.','. $request->teamwork3.','.
        $request->teamwork4.','.$request->teamwork5;
        $prof = $request->prof1.','. $request->prof2.','. $request->prof3.','.
        $request->prof4.','.$request->prof5;
        $service = $request->service1.','. $request->service2.','. $request->service3.','.
        $request->service4.','.$request->service5;
        $results = $request->results1.','. $request->results2.','. $request->results3.','.
        $request->results4.','.$request->results5;
        $innovation = $request->innnovation1.','. $request->innovation2.','. $request->innovation3.','.
        $request->innovation4.','.$request->innovation5;
        $ipcrfEncodingPart2 = DB::table('ipcrf_encoding_part2s')
        ->where('user_id', $request->user)->where('school_year', $request->empRatingPeriod)->update([
            'self_management' => $selfManagement,
            'teamwork' => $teamwork,
            'professional_and_ethics' => $prof,
            'service_orientation' => $service,
            'results_focus' => $results,
            'innovation' => $innovation,
            'school_year' => $request->schoolYear,
        ]);

        try{
            if($ipcrfEncodingPart2 > 0){
               return 'success';
            }
          }catch (Throwable $error) {
            return $error;
        }
    }

    public function updatePart4(Request $request){
        $ipcrfDevelopmentPlan = DB::table('ipcrf_development_plans')
        ->where('user_id', $request->user)->where('school_year', $request->empRatingPeriod)->update([
            'school_year' => $request->empRatingPeriod,
            'ratee' => $request->rateePart4,
            'rater' => $request->raterPart4,
            'strengths_functional' => $request->strengthsFunctional,
            'strengths_core' => $request->strengthsCore,
            'development_needs_functional' => $request->developmentNeedsFunctional,
            'development_needs_core' => $request->developmentCore,
            'learning_objectives_functional' => $request->learningObjectivesFunctional,
            'learning_objectives_core' => $request->learningObjectivesCore,
            'intervention_functional' => $request->interventionFunctional,
            'intervention_core' => $request->interventionCore,
            'timeline_functional' => $request->timelineFunctional,
            'timeline_core' => $request->timelineCore,
            'feedback' => $request->feedback,
            'resources_needed_functional' => $request->resourcesNeededFunctional,
            'resources_needed_core' => $request->resourcesNeededCore,
            'approving_authority' => $request->approvingAuthorityPart4
        ]);

        try {
            if($ipcrfDevelopmentPlan > 0){
                return 'success';
            }

            return "Success";
        } catch (Throwable $error) {
            return $error;
        }

    }


}
