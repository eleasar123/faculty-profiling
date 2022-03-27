<?php

namespace App\Http\Controllers;

use App\Models\CivilServiceEligibility;
use App\Models\LearningAndDevelopment;
use App\Models\OtherInformation;
use App\Models\PdsAdditionalInfo;
use App\Models\PdsQuestions;
use App\Models\PersonalDataSheetEducationalBackground;
use App\Models\PersonalDataSheetFamilyBackground;
use App\Models\PersonalDataSheetPersonalInformation;
use App\Models\References;
use App\Models\User;
use App\Models\VoluntaryWorkInvolvement;
use App\Models\WorkExperience;
use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    //
    //get all the pds of the teachers
    public function index()
    {
        $pds = collect();
        $pds->push([['personaInfo' => PersonalDataSheetPersonalInformation::all()]]);
        $pds->push([['familyBackground' => PersonalDataSheetFamilyBackground::all()]]);
        $pds->push([['educationalBackground' => PersonalDataSheetEducationalBackground::all()]]);
        $pds->push([['civilServiceEligibility' => CivilServiceEligibility::all()]]);
        $pds->push([['workExperience' => WorkExperience::all()]]);
        $pds->push([['voluntaryWorkInvolvement' => VoluntaryWorkInvolvement::all()]]);
        $pds->push([['learningAndDevelopment' => learningAndDevelopment::all()]]);
        $pds->push([['otherInformation' => OtherInformation::all()]]);
        $pds->push([['references' => References::all()]]);
        $pds->push([['pdsQuestions' => PdsQuestions::all()]]);
        $pds->push([['pdsAdditionalInfo' => PdsAdditionalInfo::all()]]);

        try {
            return $pds;
        } catch (Throwable $error) {
            return $error;
        }

    }

    //get pds of the user/teacher
    public function getPds($id)
    {
        //
        $pds = collect();
        $pds->push([['personaInfo' => PersonalDataSheetPersonalInformation::find($id)]]);
        $pds->push([['familyBackground' => PersonalDataSheetFamilyBackground::find($id)]]);
        $pds->push([['educationalBackground' => PersonalDataSheetEducationalBackground::find($id)]]);
        $pds->push([['civilServiceEligibility' => CivilServiceEligibility::find($id)]]);
        $pds->push([['workExperience' => WorkExperience::find($id)]]);
        $pds->push([['voluntaryWorkInvolvement' => VoluntaryWorkInvolvement::find($id)]]);
        $pds->push([['learningAndDevelopment' => learningAndDevelopment::find($id)]]);
        $pds->push([['otherInformation' => OtherInformation::find($id)]]);
        $pds->push([['references' => References::find($id)]]);
        $pds->push([['pdsQuestions' => PdsQuestions::find($id)]]);
        $pds->push([['pdsAdditionalInfo' => PdsAdditionalInfo::find($id)]]);

        try {
            return $pds;
        } catch (Throwable $error) {
            return $error;
        }

    }
    public function createUser(Request $request)
    {
        //
        $request->validate([
            'user' => 'required',
            'last_name ' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'suffix' => 'required',
            'date_of_birth ' => 'required',
            'place_of_birth' => 'required',
            'sex' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'blood_type' => 'required',
            'gsis_id_no' => 'required',
            'pag_ibig_id_no' => 'required',
            'sss_no' => 'required',
            'tin_no' => 'required',
            'agency_employee_no',
            'citizenship' => 'required',
            'residential_address_house_no' => 'required',
            'residential_address_street' => 'required',
            'residential_address_subdivision' => 'required',
            'residential_address_barangay' => 'required',
            'residential_address_city' => 'required',
            'residential_address_province' => 'required',
            'residential_address_zip_code' => 'required',
            'permanent_address_house_no' => 'required',
            'permanent_address_street' => 'required',
            'permanent_address_subdivision' => 'required',
            'permanent_address_barangay' => 'required',
            'permanent_address_city' => 'required',
            'permanent_address_province' => 'required',
            'permanent_address_zip_code' => 'required',
            'telephone_no' => 'required',
            'mobile_no' => 'required',
            'email_address' => 'required',
            'signature' => 'required',
            'date_signed' => 'required',

            //family background
            'spouse_last_name' => 'required',
            'spouse_first_name' => 'required',
            'spouse_middle_name' => 'required',
            'spouse_suffix' => 'required',
            'spouse_occupation' => 'required',
            'souse_employer' => 'required',
            'spouse_business_address' => 'required',
            'spouse_telephone_no' => 'required',
            'spouse_children' => 'required',
            'father_last_name' => 'required',
            'father_first_name' => 'required',
            'father_middle_name' => 'required',
            'father_suffix' => 'required',
            'father_occupation' => 'required',
            'father_employer' => 'required',
            'father_business_address' => 'required',
            'father_telephone_no' => 'required',
            'father_children' => 'required',
            'mother_last_name' => 'required',
            'mother_first_name' => 'required',
            'mother_middle_name' => 'required',
            'mother_suffix' => 'required',
            'mother_occupation' => 'required',
            'mother_employer' => 'required',
            'mother_business_address' => 'required',
            'mother_telephone_no' => 'required',
            'mother_children' => 'required',

            //educational background
            'level' => 'required',
            'name_of_school' => 'required',
            'basic_education_course' => 'required',
            'period_of_attendance_from' => 'required',
            'period_of_attendance_to' => 'required',
            'highest_level_units_earned' => 'required',
            'year_graduated' => 'required',
            'academic_honors_received' => 'required',

            //civil service eligibility
            'career_service' => 'required',
            'rating' => 'required',
            'date_of_examination' => 'required',
            'place_of_examination' => 'required',
            'license_number' => 'required',
            'license_date_of_validity' => 'required',

            //work experience
            'work_inclusive_dates_from' => 'required',
            'work_inclusive_dates_to' => 'required',
            'department' => 'required',
            'monthly_salary' => 'required',
            'salary_grade' => 'required',
            'status_of_appointment' => 'required',
            'government_service' => 'required',

            //voluntary work involvement
            'organization_name_and_address' => 'required',
            'voluntary_inclusive_dates_from' => 'required',
            'voluntary_inclusive_dates_to' => 'required',
            'number_of_hours' => 'required',
            'position' => 'required',

            //learning and development
            'learning_and_development_interventions' => 'required',
            'learning_inclusive_dates_from' => 'required',
            'learning_inclusive_dates_to' => 'required',
            'number_of_hours' => 'required',
            'type_of_ld' => 'required',
            'conducted_by' => 'required',

            //other information
            'special_skills_and_hobbies' => 'required',
            'non_academic_distinctions' => 'required',
            'organization_membership' => 'required',

            //references
            'reference_name' => 'required',
            'reference_address' => 'required',
            'reference_tel_no' => 'required',

            //pds questions
            'questions' => 'required',
            'answer' => 'required',

            //pds additional info
            'oath' => 'required',
            'government_id' => 'required',
            'id_no' => 'required',
            'date_place_of_issuance' => 'required',
            'signature' => 'required',
            'photo' => 'required',
            'right_thumbmark' => 'required',
            'sworn_date' => 'required',
            'person_administering_oath' => 'required',
        ]);

        $personalInfo = new PersonalDataSheetPersonalInformation([
            'user' => $request->user,
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'suffix' => $request->suffix,
            'date_of_birth' => $request->date_of_birth,
            'place_of_birth' => $request->place_of_birth,
            'sex' => $request->sex,
            'height' => $request->height,
            'weight' => $request->weight,
            'blood_type' => $request->blood_type,
            'gsis_id_no' => $request->gsis_id_no,
            'pag_ibig_id_no' => $request->pagibig_id_no,
            'sss_no' => $request->sss_no,
            'tin_no' => $request->tin_no,
            'agency_employee_no' => $request->first_name,
            'citizenship' => $request->citizenship,
            'residential_address_house_no' => $request->residential_address_house_no,
            'residential_address_street' => $request->residential_address_street,
            'residential_address_subdivision' => $request->residential_address_subdivision,
            'residential_address_barangay' => $request->residential_address_barangay,
            'residential_address_city' => $request->residential_address_city,
            'residential_address_province' => $request->residential_address_province,
            'residential_address_zip_code' => $request->residential_address_zip_code,
            'permanent_address_house_no' => $request->permanent_address_house_no,
            'permanent_address_street' => $request->permanent_address_street,
            'permanent_address_subdivision' => $request->permanent_address_subdivision,
            'permanent_address_barangay' => $request->permanent_address_barangay,
            'permanent_address_city' => $request->permanent_address_city,
            'permanent_address_province' => $request->permanent_address_province,
            'permanent_address_zip_code' => $request->permanent_address_zip_code,
            'telephone_no' => $request->telephone_no,
            'mobile_no' => $request->mobile_no,
            'email_address' => $request->email_address,
            'signature' => $request->signature,
            'date_signed' => $request->date_signed,
        ]);

        $familyBackground = new PersonalDataSheetFamilyBackground([
            'user' => $request->user,
            'spouse_last_name' => $request->spouse_last_name,
            'spouse_first_name' => $request->spouse_first_name,
            'spouse_middle_name' => $request->spouse_middle_name,
            'spouse_suffix' => $request->spouse_suffix,
            'spouse_occupation' => $request->spouse_occupation,
            'souse_employer' => $request->spouse_employer,
            'spouse_business_address' => $request->spouse_business_address,
            'spouse_telephone_no' => $request->spouse_telephone_no,
            'spouse_children' => $request->spouse_children,
            'father_last_name' => $request->father_last_name,
            'father_first_name' => $request->father_first_name,
            'father_middle_name' => $request->father_middle_name,
            'father_suffix' => $request->father_suffix,
            'father_occupation' => $request->father_occupation,
            'souse_employer' => $request->father_employer,
            'father_business_address' => $request->father_business_address,
            'father_telephone_no' => $request->father_telephone_no,
            'father_children' => $request->father_children,
            'mother_last_name' => $request->mother_last_name,
            'mother_first_name' => $request->mother_first_name,
            'mother_middle_name' => $request->mother_middle_name,
            'mother_suffix' => $request->mother_suffix,
            'mother_occupation' => $request->mother_occupation,
            'souse_employer' => $request->mother_employer,
            'mother_business_address' => $request->mother_business_address,
            'mother_telephone_no' => $request->mother_telephone_no,
            'mother_children' => $request->mother_children,
        ]);

        $educationalBackground = new PersonalDataSheetEducationalBackground([
            'user' => $request->user,
            'level' => $request->level,
            'name_of_school' => $request->name_of_school,
            'basic_education/course' => $request->basic_education,
            'period_of_attendance_from' => $request->period_of_attendance_from,
            'period_of_attendance_to' => $request->period_of_attendance_to,
            'highest_level/units_earned' => $request->highest_level,
            'year_graduated' => $request->year_graduated,
            'academic_honors_received' => $request->academic_honors_received,
        ]);

        $civilServiceEligibility = new CivilServiceEligibility([
            'user' => $request->user,
            'career_service' => $request->career_service,
            'rating' => $request->rating,
            'date_of_examination' => $request->date_of_examination,
            'place_of_examination' => $request->place_of_examination,
            'license_number' => $request->license_number,
            'license_date_of_validity' => $request->license_date_of_validity,
        ]);

        $workExperience = new WorkExperience([
            'user' => $request->user,
            'work_inclusive_dates_from' => $request->work_inclusive_dates_from,
            'work_inclusive_dates_to' => $request->work_inclusive_dates_to,
            'department' => $request->department,
            'monthly_salary' => $request->monthly_salary,
            'salary_grade' => $request->salary_grade,
            'status_of_appointment' => $request->status_of_appointment,
            'government_service' => $request->government_service,
        ]);

        $voluntaryWorkInvolvement = new VoluntaryWorkInvolvement([
            'user' => $request->user,
            'organization_name_and_address' => $request->organization_name_and_address,
            'voluntary_inclusive_dates_from' => $request->voluntary_inclusive_dates_from,
            'voluntary_inclusive_dates_to' => $request->voluntary_inclusive_dates_to,
            'number_of_hours' => $request->number_of_hours,
            'position' => $request->position,
        ]);

        $learningAndDevelopment = new LearningAndDevelopment([
            'user' => $request->user,
            'learning_and_development_interventions' => $request->learning_and_development_interventions,
            'learning_inclusive_dates_from' => $request->learning_inclusive_dates_from,
            'learning_inclusive_dates_to' => $request->learning_inclusive_dates_to,
            'number_of_hours' => $request->number_of_hours,
            'type_of_ld' => $request->type_of_ld,
            'conducted_by' => $request->conducted_by,
        ]);

        $otherInformation = new OtherInformation([
            'user' => $request->user,
            'special_skills_and_hobbies' => $request->special_skills_and_hobbies,
            'non_academic_distinctions' => $request->non_academic_distinctions,
            'organization_membership' => $request->organization_membership,
        ]);

        $references = new References([
            'user' => $request->user,
            'reference_name' => $request->reference_name,
            'reference_address' => $request->reference_address,
            'reference_tel_no' => $request->reference_tel_no,
        ]);

        $pdsQuestions = new PdsQuestions([
            'user' => $request->user,
            'questions' => $request->questions,
            'answer' => $request->answer,
        ]);

        $pdsAdditionalInfo = new PdsAdditionalInfo([
            'user' => $request->user,
            'oath' => $request->oath,
            'government_id' => $request->government_id,
            'id_no' => $request->id_no,
            'date/place_of_issuance' => $request->date_place_of_issuance,
            'signature' => $request->signature,
            'photo' => $request->photo,
            'right_thumbmark' => $request->right_thumbmark,
            'sworn_date' => $request->sworn_date,
            'person_administering_oath' => $request->person_administering_oath,
        ]);

        try {
            $references->save();
            $personalInfo->save();
            $familyBackground->save();
            $educationalBackground->save();
            $civilServiceEligibility->save();
            $workExperience->save();
            $voluntaryWorkInvolvement->save();
            $learningAndDevelopment->save();
            $otherInformation->save();
            $pdsQuestions->save();
            $pdsAdditionalInfo->save();
            return "success";
        } catch (Throwable $error) {
            return $error;
        }

    }

    public function editUser(Request $request, $user_id)
    {
        //
        $request->validate([
            'user' => 'required',
            'last_name ' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'suffix' => 'required',
            'date_of_birth ' => 'required',
            'place_of_birth' => 'required',
            'sex' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'blood_type' => 'required',
            'gsis_id_no' => 'required',
            'pag_ibig_id_no' => 'required',
            'sss_no' => 'required',
            'tin_no' => 'required',
            'agency_employee_no',
            'citizenship' => 'required',
            'residential_address_house_no' => 'required',
            'residential_address_street' => 'required',
            'residential_address_subdivision' => 'required',
            'residential_address_barangay' => 'required',
            'residential_address_city' => 'required',
            'residential_address_province' => 'required',
            'residential_address_zip_code' => 'required',
            'permanent_address_house_no' => 'required',
            'permanent_address_street' => 'required',
            'permanent_address_subdivision' => 'required',
            'permanent_address_barangay' => 'required',
            'permanent_address_city' => 'required',
            'permanent_address_province' => 'required',
            'permanent_address_zip_code' => 'required',
            'telephone_no' => 'required',
            'mobile_no' => 'required',
            'email_address' => 'required',
            'signature' => 'required',
            'date_signed' => 'required',

            //family background
            'spouse_last_name' => 'required',
            'spouse_first_name' => 'required',
            'spouse_middle_name' => 'required',
            'spouse_suffix' => 'required',
            'spouse_occupation' => 'required',
            'souse_employer' => 'required',
            'spouse_business_address' => 'required',
            'spouse_telephone_no' => 'required',
            'spouse_children' => 'required',
            'father_last_name' => 'required',
            'father_first_name' => 'required',
            'father_middle_name' => 'required',
            'father_suffix' => 'required',
            'father_occupation' => 'required',
            'father_employer' => 'required',
            'father_business_address' => 'required',
            'father_telephone_no' => 'required',
            'father_children' => 'required',
            'mother_last_name' => 'required',
            'mother_first_name' => 'required',
            'mother_middle_name' => 'required',
            'mother_suffix' => 'required',
            'mother_occupation' => 'required',
            'mother_employer' => 'required',
            'mother_business_address' => 'required',
            'mother_telephone_no' => 'required',
            'mother_children' => 'required',

            //educational background
            'level' => 'required',
            'name_of_school' => 'required',
            'basic_education/course' => 'required',
            'period_of_attendance_from' => 'required',
            'period_of_attendance_to' => 'required',
            'highest_level/units_earned' => 'required',
            'year_graduated' => 'required',
            'academic_honors_received' => 'required',

            //civil service eligibility
            'career_service' => 'required',
            'rating' => 'required',
            'date_of_examination' => 'required',
            'place_of_examination' => 'required',
            'license_number' => 'required',
            'license_date_of_validity' => 'required',

            //work experience
            'work_inclusive_dates_from' => 'required',
            'work_inclusive_dates_to' => 'required',
            'department' => 'required',
            'monthly_salary' => 'required',
            'salary_grade' => 'required',
            'status_of_appointment' => 'required',
            'government_service' => 'required',

            //voluntary work involvement
            'organization_name_and_address' => 'required',
            'voluntary_inclusive_dates_from' => 'required',
            'voluntary_inclusive_dates_to' => 'required',
            'number_of_hours' => 'required',
            'position' => 'required',

            //learning and development
            'learning_and_development_interventions' => 'required',
            'learning_inclusive_dates_from' => 'required',
            'learning_inclusive_dates_to' => 'required',
            'number_of_hours' => 'required',
            'type_of_ld' => 'required',
            'conducted_by' => 'required',

            //other information
            'special_skills_and_hobbies' => 'required',
            'non_academic_distinctions' => 'required',
            'organization_membership' => 'required',

            //references
            'reference_name' => 'required',
            'reference_address' => 'required',
            'reference_tel_no' => 'required',

            //pds questions
            'questions' => 'required',
            'answer' => 'required',

            //pds additional info
            'oath' => 'required',
            'government_id' => 'required',
            'id_no' => 'required',
            'date/place_of_issuance' => 'required',
            'signature' => 'required',
            'photo' => 'required',
            'right_thumbmark' => 'required',
            'sworn_date' => 'required',
            'person_administering_oath' => 'required',
        ]);

        $personalInfo = PersonalDataSheetPersonalInformation::find($user_id);
        $personalInfo->last_name = $request->last_name;
        $personalInfo->first_name = $request->first_name;
        $personalInfo->middle_name = $request->middle_name;
        $personalInfo->suffix = $request->suffix;
        $personalInfo->date_of_birth = $request->date_of_birth;
        $personalInfo->place_of_birth = $request->place_of_birth;
        $personalInfo->sex = $request->sex;
        $personalInfo->height = $request->height;
        $personalInfo->weight = $request->weight;
        $personalInfo->blood_type = $request->blood_type;
        $personalInfo->gsis_id_no = $request->gsis_id_no;
        $personalInfo->pag_ibig_id_no = $request->pag_ibig_id_no;
        $personalInfo->sss_no = $request->sss_no;
        $personalInfo->tin_no = $request->tin_no;
        $personalInfo->agency_employee_no = $request->first_name;
        $personalInfo->citizenship = $request->citizenship;
        $personalInfo->residential_address_house_no = $request->residential_address_house_no;
        $personalInfo->residential_address_street = $request->residential_address_street;
        $personalInfo->residential_address_subdivision = $request->residential_address_subdivision;
        $personalInfo->residential_address_barangay = $request->residential_address_barangay;
        $personalInfo->residential_address_city = $request->residential_address_city;
        $personalInfo->residential_address_province = $request->residential_address_province;
        $personalInfo->residential_address_zip_code = $request->residential_address_zip_code;
        $personalInfo->permanent_address_house_no = $request->permanent_address_house_no;
        $personalInfo->permanent_address_street = $request->permanent_address_street;
        $personalInfo->permanent_address_subdivision = $request->permanent_address_subdivision;
        $personalInfo->permanent_address_barangay = $request->permanent_address_barangay;
        $personalInfo->permanent_address_city = $request->permanent_address_city;
        $personalInfo->permanent_address_province = $request->permanent_address_province;
        $personalInfo->permanent_address_zip_code = $request->permanent_address_zip_code;
        $personalInfo->telephone_no = $request->telephone_no;
        $personalInfo->mobile_no = $request->mobile_no;
        $personalInfo->email_address = $request->email_address;
        $personalInfo->signature = $request->signature;
        $personalInfo->date_signed = $request->date_signed;

        $familyBackground = PersonalDataSheetFamilyBackground::find($user_id);
        $familyBackground->spouse_last_name = $request->spouse_last_name;
        $familyBackground->spouse_first_name = $request->spouse_first_name;
        $familyBackground->spouse_middle_name = $request->spouse_middle_name;
        $familyBackground->spouse_suffix = $request->spouse_suffix;
        $familyBackground->spouse_occupation = $request->spouse_occupation;
        $familyBackground->souse_employer = $request->spouse_employer;
        $familyBackground->spouse_business_address = $request->spouse_business_address;
        $familyBackground->spouse_telephone_no = $request->spouse_telephone_no;
        $familyBackground->spouse_children = $request->spouse_children;
        $familyBackground->father_last_name = $request->father_last_name;
        $familyBackground->father_first_name = $request->father_first_name;
        $familyBackground->father_middle_name = $request->father_middle_name;
        $familyBackground->father_suffix = $request->father_suffix;
        $familyBackground->father_occupation = $request->father_occupation;
        $familyBackground->souse_employer = $request->father_employer;
        $familyBackground->father_business_address = $request->father_business_address;
        $familyBackground->father_telephone_no = $request->father_telephone_no;
        $familyBackground->father_children = $request->father_children;
        $familyBackground->mother_last_name = $request->mother_last_name;
        $familyBackground->mother_first_name = $request->mother_first_name;
        $familyBackground->mother_middle_name = $request->mother_middle_name;
        $familyBackground->mother_suffix = $request->mother_suffix;
        $familyBackground->mother_occupation = $request->mother_occupation;
        $familyBackground->souse_employer = $request->mother_employer;
        $familyBackground->mother_business_address = $request->mother_business_address;
        $familyBackground->mother_telephone_no = $request->mother_telephone_no;
        $familyBackground->mother_children = $request->mother_children;

        $educationalBackground = PersonalDataSheetEducationalBackground::find($user_id);
        $educationalBackground->level = $request->level;
        $educationalBackground->name_of_school = $request->name_of_school;
        $educationalBackground->basic_education = $request->basic_education;
        $educationalBackground->period_of_attendance_from = $request->period_of_attendance_from;
        $educationalBackground->period_of_attendance_to = $request->period_of_attendance_to;
        $educationalBackground->highest_level = $request->highest_level;
        $educationalBackground->year_graduated = $request->year_graduated;
        $educationalBackground->academic_honors_received = $request->academic_honors_received;

        $civilServiceEligibility = CivilServiceEligibility::find($user_id);
        $civilServiceEligibility->career_service = $request->career_service;
        $civilServiceEligibility->rating = $request->rating;
        $civilServiceEligibility->date_of_examination = $request->date_of_examination;
        $civilServiceEligibility->place_of_examination = $request->place_of_examination;
        $civilServiceEligibility->license_number = $request->license_number;
        $civilServiceEligibility->license_date_of_validity = $request->license_date_of_validity;

        $workExperience = WorkExperience::find($user_id);
        $workExperience->work_inclusive_dates_from = $request->work_inclusive_dates_from;
        $workExperience->work_inclusive_dates_to = $request->work_inclusive_dates_to;
        $workExperience->department = $request->department;
        $workExperience->monthly_salary = $request->monthly_salary;
        $workExperience->salary_grade = $request->salary_grade;
        $workExperience->status_of_appointment = $request->status_of_appointment;
        $workExperience->government_service = $request->government_service;

        $voluntaryWorkInvolvement = VoluntaryWorkInvolvement::find($user_id);
        $voluntaryWorkInvolvement->organization_name_and_address = $request->organization_name_and_address;
        $voluntaryWorkInvolvement->voluntary_inclusive_dates_from = $request->voluntary_inclusive_dates_from;
        $voluntaryWorkInvolvement->voluntary_inclusive_dates_to = $request->voluntary_inclusive_dates_to;
        $voluntaryWorkInvolvement->number_of_hours = $request->number_of_hours;
        $voluntaryWorkInvolvement->position = $request->position;

        $learningAndDevelopment = LearningAndDevelopment::find($user_id);
        $learningAndDevelopment->learning_and_development_interventions = $request->learning_and_development_interventions;
        $learningAndDevelopment->learning_inclusive_dates_from = $request->learning_inclusive_dates_from;
        $learningAndDevelopment->learning_inclusive_dates_to = $request->learning_inclusive_dates_to;
        $learningAndDevelopment->number_of_hours = $request->number_of_hours;
        $learningAndDevelopment->type_of_ld = $request->type_of_ld;
        $learningAndDevelopment->conducted_by = $request->conducted_by;

        $otherInformation = OtherInformation::find($user_id);
        $otherInformation->special_skills_and_hobbies = $request->special_skills_and_hobbies;
        $otherInformation->non_academic_distinctions = $request->non_academic_distinctions;
        $otherInformation->organization_membership = $request->organization_membership;

        $references = References::find($user_id);
        $references->reference_name = $request->reference_name;
        $references->reference_address = $request->reference_address;
        $references->reference_tel_no = $request->reference_tel_no;

        $pdsQuestions = PdsQuestions::find($user_id);
        $pdsQuestions->questions = $request->questions;
        $pdsQuestions->answer = $request->answer;

        $pdsAdditionalInfo = PdsAdditionalInfo::find($user_id);
        $pdsAdditionalInfo->oath = $request->oath;
        $pdsAdditionalInfo->government_id = $request->government_id;
        $pdsAdditionalInfo->id_no = $request->id_no;
        $pdsAdditionalInfo->date_place_of_issuance = $request->date_place_of_issuance;
        $pdsAdditionalInfo->signature = $request->signature;
        $pdsAdditionalInfo->photo = $request->photo;
        $pdsAdditionalInfo->right_thumbmark = $request->right_thumbmark;
        $pdsAdditionalInfo->sworn_date = $request->sworn_date;
        $pdsAdditionalInfo->person_administering_oath = $request->person_administering_oath;

        try {
            $references->save();
            $personalInfo->save();
            $familyBackground->save();
            $educationalBackground->save();
            $civilServiceEligibility->save();
            $workExperience->save();
            $voluntaryWorkInvolvement->save();
            $learningAndDevelopment->save();
            $otherInformation->save();
            $pdsQuestions->save();
            $pdsAdditionalInfo->save();
            return "success";
        } catch (Throwable $error) {
            return $error;
        }

    }
}
