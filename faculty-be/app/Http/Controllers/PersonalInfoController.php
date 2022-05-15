<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\CivilServiceEligibility;
use App\Models\LearningAndDevelopment;
use App\Models\OtherInfo;
use App\Models\PdsAdditionalInfo;
use App\Models\PdsQuestions;
use App\Models\PersonalDataSheetEducationalBackground;
use App\Models\PersonalDataSheetFamilyBackground;
use App\Models\PersonalDataSheetPersonalInformation;
use App\Models\References;
use App\Models\User;
use App\Models\VoluntaryWorkInvolvement;
use App\Models\WorkExperience;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
class PersonalInfoController extends Controller
{
  //retrieve image
  public function displayImage($fileName)
    {
        $path = public_path("public/images\\" . $fileName);
        // return $path;
        return Response::download($path);
    }

 //receive image
 public function handleImage(Request $request)
 {
  //  return $request->all();
  // $request->validate([
  //  'educBackgroundSignature' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  //  'workExperienceSignature' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  //  'otherInfoSignature' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  //  'personalPhotoAttachment' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  //  'oathSignature' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  //  'rightThumbMark' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  //  'personAdministeringOath' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf',
  // ]);
  // return $request;
  if ($request->hasFile('educBackgroundSignature')) {
  $image           = $request->file('educBackgroundSignature');
   $destinationPath = 'public/signatures/educational-background/';
   $imageName       = $image->getClientOriginalName();
   $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
   $affected = DB::table('personal_data_sheet_personal_information')
   ->where('user_id', $request->user)
   ->update(['educational_signature' => $imageName]);
  }
  if ($request->hasFile('workExperienceSignature')) {
    $destinationPath = 'public/signatures/work-experience/';
    $image           = $request->file('workExperienceSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('workExperienceSignature')->storeAs($destinationPath, $imageName);
    $affected = DB::table('personal_data_sheet_personal_information')
   ->where('user_id', $request->user)
   ->update(['work_experience_signature' => $imageName]);
   }
   if ($request->hasFile('otherInfoSignature')) {

    $destinationPath = 'public/signatures/other-info';
    $image           = $request->file('otherInfoSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('otherInfoSignature')->storeAs($destinationPath, $imageName);
    $affected = DB::table('personal_data_sheet_personal_information')
   ->where('user_id', $request->user)
   ->update(['other_info_signature' => $imageName]);
   }
   if ($request->hasFile('personalPhotoAttachment')) {
    $destinationPath = 'public/profiles/personal-photo/';
    $image           = $request->file('personalPhotoAttachment');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('personalPhotoAttachment')->storeAs($destinationPath, $imageName);
    $affected = DB::table('pds_additional_infos')
    ->where('user_id', $request->user)
    ->update(['photo' => $imageName]);
   }
   if ($request->hasFile('oathSignature')) {
    $destinationPath = 'public/signatures/oath-signature/';
    $image           = $request->file('oathSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('oathSignature')->storeAs($destinationPath, $imageName);
    $affected = DB::table('pds_additional_infos')
    ->where('user_id', $request->user)
    ->update(['oath' => $imageName]);
   }
   if ($request->hasFile('rightThumbMark')) {
    $destinationPath = 'public/signatures/right-thumbmark/';
    $image           = $request->file('rightThumbMark');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('rightThumbMark')->storeAs($destinationPath, $imageName);
    $affected = DB::table('pds_additional_infos')
    ->where('user_id', $request->user)
    ->update(['right_thumbmark' => $imageName]);
   }
   if ($request->hasFile('personAdministeringOath')) {
    $destinationPath = 'public/signatures/person-administering-oath/';
    $image           = $request->file('personAdministeringOath');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('personAdministeringOath')->storeAs($destinationPath, $imageName);
    $affected = DB::table('pds_additional_infos')
    ->where('user_id', $request->user)
    ->update(['person_administering_oath' => $imageName]);
   }
   try {
    return 'success';
   } catch (Throwable $e) {
    return $e;
   }

 }

 //get all the pds of the teachers
 public function index()
 {
  $pds = collect();
  $pds->push([['personalInfo' => PersonalDataSheetPersonalInformation::all()]]);
  $pds->push([['familyBackground' => PersonalDataSheetFamilyBackground::all()]]);
  $pds->push([['educationalBackground' => PersonalDataSheetEducationalBackground::all()]]);
  $pds->push([['civilServiceEligibility' => CivilServiceEligibility::all()]]);
  $pds->push([['workExperience' => WorkExperience::all()]]);
  $pds->push([['voluntaryWorkInvolvement' => VoluntaryWorkInvolvement::all()]]);
  $pds->push([['learningAndDevelopment' => learningAndDevelopment::all()]]);
  $pds->push([['otherInfo' => OtherInfo::all()]]);
  $pds->push([['references' => References::all()]]);
  $pds->push([['pdsQuestions' => PdsQuestions::all()]]);
  $pds->push([['pdsAdditionalInfo' => PdsAdditionalInfo::all()]]);
  return $pds;
  // return [
  //   'id' => $id,
  // ]

 }

 //get pds of the user/teacher
 public function getPds($id)
 {
  //
  $pds = collect();
  $pds->push([['personalInfo' => PersonalDataSheetPersonalInformation::where('user_id', $id)->get()]]);
  $pds->push([['familyBackground' => PersonalDataSheetFamilyBackground::where('user_id', $id)->get()]]);
  $pds->push([['educationalBackground' => PersonalDataSheetEducationalBackground::where('user_id', $id)->get()]]);
  $pds->push([['civilServiceEligibility' => CivilServiceEligibility::where('user_id', $id)->get()]]);
  $pds->push([['workExperience' => WorkExperience::where('user_id', $id)->get()]]);
  $pds->push([['voluntaryWorkInvolvement' => VoluntaryWorkInvolvement::where('user_id', $id)->get()]]);
  $pds->push([['learningAndDevelopment' => learningAndDevelopment::where('user_id', $id)->get()]]);
  $pds->push([['otherInfo' => OtherInfo::where('user_id', $id)->get()]]);
  $pds->push([['references' => References::where('user_id', $id)->get()]]);
  $pds->push([['pdsQuestions' => PdsQuestions::where('user_id', $id)->get()]]);
  $pds->push([['pdsAdditionalInfo' => PdsAdditionalInfo::where('user_id', $id)->get()]]);

  return $pds;
 }

 public function getImage($id){

  $imageNameEducBackground = DB::table('personal_data_sheet_personal_information')->where('user_id', $id)->value('educational_signature');
  $imageNameworkExp = DB::table('personal_data_sheet_personal_information')->where('user_id', $id)->value('work_experience_signature');
  $imageNameOtherInfo = DB::table('personal_data_sheet_personal_information')->where('user_id', $id)->value('other_info_signature');
  $imageNamePersonalPhoto = DB::table('pds_additional_infos')->where('user_id', $id)->value('photo');
  $imageNameOathSignature = DB::table('pds_additional_infos')->where('user_id', $id)->value('oath');
  $imageNameRightThumbMark = DB::table('pds_additional_infos')->where('user_id', $id)->value('right_thumbmark');
  $imageNamePersonAdministeringOath = DB::table('pds_additional_infos')->where('user_id', $id)->value('person_administering_oath');



  return[
  'educationalBackgroundSignature' =>asset('storage/signatures/educational-background/'.$imageNameEducBackground),
  'workExperienceSignature' => asset('storage/signatures/work-experience/'.$imageNameworkExp),
  'otherInfoSignature' => asset('storage/signatures/other-info/'.$imageNameOtherInfo),
  'personalPhoto' => asset('storage/profiles/'.$imageNamePersonalPhoto),
  'oathSignature' => asset('storage/signatures/oath-signature/'.$imageNameOathSignature),
  'rightThumbMark' => asset('storage/signatures/right-thumbmark/'.$imageNameRightThumbMark),
  'personAdministeringOath' => asset('storage/signatures/person-administering-oath/'.$imageNamePersonAdministeringOath),
  ];
}

 public function createPds(Request $request)
 {

  $request->validate([
   'user'                             => 'required',
   'personalSurname'                  => 'required',
   'personalFirstName'                => 'required',
   'personalMiddleName'               => 'required',
   'personalDateOfBirth'              => 'required',
   'personalPlaceOfBirth'             => 'required',
   'personalCitizenship'              => 'required',
   'personalSex'                      => 'required',
   'personalCivilStatus'              => 'required',
   'personalHeight'                   => 'required',
   'personalWeight'                   => 'required',
   'personalBloodType'                => 'required',
   'personalGSISIDNo'                 => 'required',
   'personalPHILHEALTHNo'             => 'required',
  //  'personalResAddressHouseNo'        => 'required',
  //  'personalResAddressStreet'         => 'required',
  //  'personalResAddressSubdivision'    => 'required',
   'personalResAddressBarangay'       => 'required',
   'personalResAddressCity'           => 'required',
   'personalResAddressProvince'       => 'required',
   'personalZipCode'                  => 'required',
   'personalPAGIBIGIDNo'              => 'required',
   'personalPHILHEALTHNo'             => 'required',
  //  'personalPermanentAddHouseNo'      => 'required',
  //  'personalPermanentAddStreet'       => 'required',
  //  'personalPermanentAddSubdivision'  => 'required',
   'personalPermanentAddBarangay'     => 'required',
   'personalPermanentAddCity'         => 'required',
   'personalPermanentAddProvince'     => 'required',
   'personalPermanentAddZipCode'      => 'required',
   'personalSSSNo'                    => 'required',
   'personalTelephoneNo'              => 'required',
   'personalTinNo'                    => 'required',
   'personalMobileNo'                 => 'required',
   'personalAgencyEmployeeNo'         => 'required',
   'personalEmailAddress'             => 'required',
  //  'familySpouseSurname'              => 'required',
  //  'familySpouseFirstName'            => 'required',
  //  'familySpouseMiddleName'           => 'required',
  //  'familySpouseSuffix'               => 'required',
  //  'familySpouseOccupation'           => 'required',
  //  'familyEmployerName'               => 'required',
  //  'familyBusinessAddress'            => 'required',
  //  'familyTelephoneNo'                => 'required',
   'familyFatherSurname'              => 'required',
   'familyFatherFirstName'            => 'required',
   'familyFatherMiddleName'           => 'required',
  //  'familyFatherSuffix'               => 'required',
   'familyMotherMaidenName'           => 'required',
   'familyMotherSurname'              => 'required',
   'familyMotherFirstName'            => 'required',
   'familyMotherMiddleName'           => 'required',
  //  'dateOfBirthSpouse'                => 'required',
   'dateOfBirthFather'                => 'required',
   'dateOfBirthMother'                => 'required',
   'educationalBackground'            => 'required',

   'educBackgroundDateOfSignature'    => 'required',
   'civilServiceEligibility'          => 'required',
   'workExperience'                   => 'required',

   'workExperienceDateOfSignature'    => 'required',
   'voluntaryWorkInvolvement'         => 'required',
   'learningAndDevelopment'           => 'required',
  //  'otherInfoSpecialSkills'           => 'required',
  //  'otherInfoNonacademicDistinctions' => 'required',
  //  'otherInfoAssociationMembers'      => 'required',

   'otherInfoDateOfSignature'         => 'required',
   'otherInfo'      => 'required',
  //  'questionThirtyFour'               => 'required',
  //  'questionThirtyFiveA'              => 'required',
  //  'questionThirtyFiveBDateFiled'     => 'required',
  //  'questionThirtyFiveBStatusOfCase'  => 'required',
  //  'questionThirtySix'                => 'required',
  //  'questionThirtySeven'              => 'required',
  //  'questionThirtyEight'              => 'required',
  //  'questionThirtyNine'               => 'required',
  //  'questionFourtyA'                  => 'required',
  //  'questionFourtyB'                  => 'required',
  //  'questionFourtyC'                  => 'required',
   'references'                       => 'required',

   'governmentIssuedID'               => 'required',
   'governmentIssuedIDNo'             => 'required',
   'governmentIDDateOrPlaceIssued'    => 'required',

   'oathDateAccomplished'             => 'required',

   'subscribedAndSwornDate'           => 'required',

  //  'children'                         => 'required',

  ]);

  $personalInfo = new PersonalDataSheetPersonalInformation([
   'user_id'                         => $request->user,
   'last_name'                       => $request->personalSurname,
   'first_name'                      => $request->personalFirstName,
   'middle_name'                     => $request->personalMiddleName,
   'suffix'                          => $request->personalSuffix,
   'date_of_birth'                   => $request->personalDateOfBirth,
   'place_of_birth'                  => $request->personalPlaceOfBirth,
   'sex'                             => $request->personalSex,
   'civil_status'                    => $request->personalCivilStatus,
   'height'                          => $request->personalHeight,
   'weight'                          => $request->personalWeight,
   'blood_type'                      => $request->personalBloodType,
   'gsis_id_no'                      => $request->personalGSISIDNo,
   'pag_ibig_id_no'                  => $request->personalPAGIBIGIDNo,
   'sss_no'                          => $request->personalSSSNo,
   'tin_no'                          => $request->personalTinNo,
   'philhealth_no'                   => $request->personalPHILHEALTHNo,
   'agency_employee_no'              => $request->personalAgencyEmployeeNo,
   'citizenship'                     => $request->personalCitizenship,
   'dual_citizenship'                => $request->personalDualCitizenship,
   'country_of_citizenship'          => $request->countryOfCitizenship,
   'residential_address_house_no'    => $request->personalResAddressHouseNo,
   'residential_address_street'      => $request->personalResAddressStreet,
   'residential_address_subdivision' => $request->personalResAddressSubdivision,
   'residential_address_barangay'    => $request->personalResAddressBarangay,
   'residential_address_city'        => $request->personalResAddressCity,
   'residential_address_province'    => $request->personalResAddressProvince,
   'residential_address_zip_code'    => $request->personalZipCode,
   'permanent_address_house_no'      => $request->personalPermanentAddHouseNo,
   'permanent_address_street'        => $request->personalPermanentAddStreet,
   'permanent_address_subdivision'   => $request->personalPermanentAddSubdivision,
   'permanent_address_barangay'      => $request->personalPermanentAddBarangay,
   'permanent_address_city'          => $request->personalPermanentAddCity,
   'permanent_address_province'      => $request->personalPermanentAddProvince,
   'permanent_address_zip_code'      => $request->personalPermanentAddZipCode,
   'telephone_no'                    => $request->personalTelephoneNo,
   'mobile_no'                       => $request->personalMobileNo,
   'email_address'                   => $request->personalEmailAddress,
   //  'educational_signature'                       => $request->educBackgroundSignature,
   'educational_date_signed'         => $request->educBackgroundDateOfSignature,
   //  'work_experience_signature'                       => $request->workExperienceSignature,
   'work_experience_date_signed'     => $request->workExperienceDateOfSignature,
   //  'other_info_signature'                       => $request->otherInfoSignature,
   'other_info_date_signed'          => $request->otherInfoDateOfSignature,
  ]);


  $familyBackground = new PersonalDataSheetFamilyBackground([
   'user_id'                 => $request->user,
   'spouse_last_name'        => $request->familySpouseSurname,
   'spouse_first_name'       => $request->familySpouseFirstName,
   'spouse_middle_name'      => $request->familySpouseMiddleName,
   'spouse_suffix'           => $request->familySpouseSuffix,
   'spouse_occupation'       => $request->familySpouseOccupation,
   'spouse_employer'         => $request->familyEmployerName,
   'spouse_business_address' => $request->familyBusinessAddress,
   'spouse_telephone_no'     => $request->familyTelephoneNo,
   'first_child' =>$request->firstChild,
            'second_child' =>$request->secondChild,
            'third_child' =>$request->thirdChild,
            'fourth_child' =>$request->fourthChild,
            'fifth_child' =>$request->fifthChild,
            'sixth_child' =>$request->sixthChild,
   'spouse_date_of_birth'    => $request->dateOfBirthSpouse,
   'father_last_name'        => $request->familyFatherSurname,
   'father_first_name'       => $request->familyFatherFirstName,
   'father_middle_name'      => $request->familyFatherMiddleName,
   'father_suffix'           => $request->familyFatherSuffix,
   'father_date_of_birth'    => $request->dateOfBirthFather,
   'mother_maiden_name'      => $request->familyMotherMaidenName,
   'mother_last_name'        => $request->familyMotherSurname,
   'mother_first_name'       => $request->familyMotherFirstName,
   'mother_middle_name'      => $request->familyMotherMiddleName,
   'mother_date_of_birth'    => $request->dateOfBirthMother,
  ]);

  foreach ($request->educationalBackground as $educBackground) {
   // return $educBackground['educBackgroundLevel'];
   $educationalBackground = new PersonalDataSheetEducationalBackground([
    'user_id'                    => $request->user,
    'level'                      => $educBackground['educBackgroundLevel'],
    'name_of_school'             => $educBackground['educBackgroundNameOfSchool'],
    'basic_education_course'     => $educBackground['educBackgroundBasicEducation'],
    'period_of_attendance_from'  => $educBackground['educBackgroundPeriodOfAttendanceFrom'],
    'period_of_attendance_to'    => $educBackground['educBackgroundPeriodOfAttendanceTo'],
    'highest_level_units_earned' => $educBackground['educBackgroundHighestLevel'],
    'year_graduated'             => $educBackground['educBackgroundYearGraduated'],
    'academic_honors_received'   => $educBackground['educBackgroundScholarship'],
   ]);
   try {
    $educationalBackground->save();
   } catch (Throwable $e) {
    return $e;
   }
  }
  // foreach ($request->children as $child) {
  //  // return $educBackground['educBackgroundLevel'];
  //  $children = new Children([
  //   'user_id'    => $request->user,
  //   'child_name' => $child['childName'],
  //  ]);
  //  try {
  //   $children->save();
  //  } catch (Throwable $e) {
  //   return e;
  //  }

  // }

  foreach ($request->civilServiceEligibility as $civilServ) {
   $civilServiceEligibility = new CivilServiceEligibility([
    'user_id'                  => $request->user,
    'career_service'           => $civilServ['careerService'],
    'rating'                   => $civilServ['rating'],
    'date_of_examination'      => $civilServ['dateOfExamination'],
    'place_of_examination'     => $civilServ['placeOfExamination'],
    'license_number'           => $civilServ['licenseNumber'],
    'license_date_of_validity' => $civilServ['dateOfValidity'],
   ]);
   try {
    $civilServiceEligibility->save();
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->workExperience as $workExp) {
   $workExperience = new WorkExperience([
    'user_id'                   => $request->user,
    'work_inclusive_dates_from' => $workExp['inclusiveDateFromWorkExperience'],
    'work_inclusive_dates_to'   => $workExp['inclusiveDateToWorkExperience'],
    'position'                  => $workExp['positionTitleWorkExperience'],
    'department'                => $workExp['departmentWorkExperience'],
    'monthly_salary'            => $workExp['monthlySalaryWorkExperience'],
    'salary_grade'              => $workExp['salaryGradeWorkExperience'],
    'status_of_appointment'     => $workExp['statusOfAppointmentWorkExperience'],
    'government_service'        => $workExp['governmentServiceWorkExperience'],
   ]);
   try {
    $workExperience->save();
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->voluntaryWorkInvolvement as $volWork) {
   $voluntaryWorkInvolvement = new VoluntaryWorkInvolvement([
    'user_id'                        => $request->user,
    'organization_name_and_address'  => $volWork['nameAndAddressOfOrgVolWork'],
    'voluntary_inclusive_dates_from' => $volWork['inclusiveDatesFromVolWork'],
    'voluntary_inclusive_dates_to'   => $volWork['inclusiveDatesToVolWork'],
    'number_of_hours'                => $volWork['numberOfHoursVolWork'],
    'position'                       => $volWork['positionOfWorkVolWork'],
   ]);
   try {
    $voluntaryWorkInvolvement->save();
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->learningAndDevelopment as $learnAndDev) {
   $learningAndDevelopment = new LearningAndDevelopment([
    'user_id'                                => $request->user,
    'learning_and_development_interventions' => $learnAndDev['learningAndDevelopmentInterventions'],
    'learning_inclusive_dates_from'          => $learnAndDev['learningAndDevelopmentInclusiveDatesFrom'],
    'learning_inclusive_dates_to'            => $learnAndDev['learningAndDevelopmentInclusiveDatesTo'],
    'number_of_hours'                        => $learnAndDev['learningAndDevelopmentNumberOfHours'],
    'type_of_ld'                             => $learnAndDev['learningAndDevelopmentTypeOfLD'],
    'conducted_by'                           => $learnAndDev['learningAndDevelopmentConductedBy'],
   ]);
   try {
    $learningAndDevelopment->save();
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->otherInfo as $otherInfo) {
   $otherInfo = new OtherInfo([
    'user_id'                    => $request->user,
    'special_skills_and_hobbies' => $otherInfo['otherInfoSpecialSkills'],
    'nonacademic_distinctions' => $otherInfo['otherInfoNonacademicDistinctions'],
    'association_members' => $otherInfo['otherInfoAssociationMembers'],
   ]);
   try {
    $otherInfo->save();
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->references as $reference) {
   $references = new References([
    'user_id'           => $request->user,
    'reference_name'    => $reference['name'],
    'reference_address' => $reference['address'],
    'reference_tel_no'  => $reference['telephoneNo'],
   ]);
   try {
    $references->save();
   } catch (Throwable $e) {
    return $e;
   }
  }
  $pdsQuestions = new PdsQuestions([
   'user_id'                               => $request->user,
   'question_thirty_four'                  => $request->questionThirtyFour,
   'question_thirty_five_a'                => $request->questionThirtyFiveA,
   'question_thirty_five_b_date_filed'     => $request->questionThirtyFiveBDateFiled,
   'question_thirty_five_B_status_of_case' => $request->questionThirtyFiveBStatusOfCase,
   'question_thirty_six'                   => $request->questionThirtySix,
   'question_thirty_seven'                 => $request->questionThirtySeven,
   'question_thirty_eight_a'                 => $request->questionThirtyEightA,
   'question_thirty_eight_b'                 => $request->questionThirtyEightB,
   'question_thirty_nine'                  => $request->questionThirtyNine,
   'question_forty_a'                      => $request->questionFourtyA,
   'question_forty_b'                      => $request->questionFourtyB,
   'question_forty_c'                      => $request->questionFourtyC,
  ]);

  $pdsAdditionalInfo = new PdsAdditionalInfo([
   'user_id'                => $request->user,
   //  'oath'                      => $request->oathSignature,
   'government_id'          => $request->governmentIssuedID,
   'id_no'                  => $request->governmentIssuedIDNo,
   'date_place_of_issuance' => $request->governmentIDDateOrPlaceIssued,
   //  'signature'                 => $request->oathSignature,
   'oath_date_accomplished' => $request->oathDateAccomplished,
   //  'photo'                     => $request->personalPhotoAttachment,
   //  'right_thumbmark'           => $request->rightThumbMark,
   'sworn_date'             => $request->subscribedAndSwornDate,
   //  'person_administering_oath' => $request->personAdministeringOath,
  ]);

  try {
   $personalInfo->save();
   $familyBackground->save();
   $pdsQuestions->save();
   $pdsAdditionalInfo->save();
   $pds = collect();
   $pds->push([['personalInfoId' => DB::table('personal_data_sheet_personal_information')->where('user_id', $request->user)->get()]]);
   $pds->push([['pdsAdditionalInfoId' => DB::table('pds_additional_infos')->where('user_id', $request->user)->get()]]);
   $pds->push([['message' => "success"]]);

   return $pds;
  } catch (Throwable $error) {
   return $error;
  }

 }

 public function editPds(Request $request)
 {

  $request->validate([
    'user'                             => 'required',
    'personalSurname'                  => 'required',
    'personalFirstName'                => 'required',
    'personalMiddleName'               => 'required',
    'personalDateOfBirth'              => 'required',
    'personalPlaceOfBirth'             => 'required',
    'personalCitizenship'              => 'required',
    'personalSex'                      => 'required',
    'personalCivilStatus'              => 'required',
    'personalHeight'                   => 'required',
    'personalWeight'                   => 'required',
    'personalBloodType'                => 'required',
    'personalGSISIDNo'                 => 'required',
    'personalPHILHEALTHNo'             => 'required',
   //  'personalResAddressHouseNo'        => 'required',
   //  'personalResAddressStreet'         => 'required',
   //  'personalResAddressSubdivision'    => 'required',
    'personalResAddressBarangay'       => 'required',
    'personalResAddressCity'           => 'required',
    'personalResAddressProvince'       => 'required',
    'personalZipCode'                  => 'required',
    'personalPAGIBIGIDNo'              => 'required',
    'personalPHILHEALTHNo'             => 'required',
   //  'personalPermanentAddHouseNo'      => 'required',
   //  'personalPermanentAddStreet'       => 'required',
   //  'personalPermanentAddSubdivision'  => 'required',
    'personalPermanentAddBarangay'     => 'required',
    'personalPermanentAddCity'         => 'required',
    'personalPermanentAddProvince'     => 'required',
    'personalPermanentAddZipCode'      => 'required',
    'personalSSSNo'                    => 'required',
    'personalTelephoneNo'              => 'required',
    'personalTinNo'                    => 'required',
    'personalMobileNo'                 => 'required',
    'personalAgencyEmployeeNo'         => 'required',
    'personalEmailAddress'             => 'required',
   //  'familySpouseSurname'              => 'required',
   //  'familySpouseFirstName'            => 'required',
   //  'familySpouseMiddleName'           => 'required',
   //  'familySpouseSuffix'               => 'required',
   //  'familySpouseOccupation'           => 'required',
   //  'familyEmployerName'               => 'required',
   //  'familyBusinessAddress'            => 'required',
   //  'familyTelephoneNo'                => 'required',
    'familyFatherSurname'              => 'required',
    'familyFatherFirstName'            => 'required',
    'familyFatherMiddleName'           => 'required',
    // 'familyFatherSuffix'               => 'required',
    'familyMotherMaidenName'           => 'required',
    'familyMotherSurname'              => 'required',
    'familyMotherFirstName'            => 'required',
    'familyMotherMiddleName'           => 'required',
   //  'dateOfBirthSpouse'                => 'required',
    'dateOfBirthFather'                => 'required',
    'dateOfBirthMother'                => 'required',
    'educationalBackground'            => 'required',

    'educBackgroundDateOfSignature'    => 'required',
    'civilServiceEligibility'          => 'required',
    'workExperience'                   => 'required',

    'workExperienceDateOfSignature'    => 'required',
    'voluntaryWorkInvolvement'         => 'required',
    'learningAndDevelopment'           => 'required',
   //  'otherInfoSpecialSkills'           => 'required',
   //  'otherInfoNonacademicDistinctions' => 'required',
   //  'otherInfoAssociationMembers'      => 'required',

    'otherInfoDateOfSignature'         => 'required',
    'otherInfo'      => 'required',
   //  'questionThirtyFour'               => 'required',
   //  'questionThirtyFiveA'              => 'required',
   //  'questionThirtyFiveBDateFiled'     => 'required',
   //  'questionThirtyFiveBStatusOfCase'  => 'required',
   //  'questionThirtySix'                => 'required',
   //  'questionThirtySeven'              => 'required',
   //  'questionThirtyEight'              => 'required',
   //  'questionThirtyNine'               => 'required',
   //  'questionFourtyA'                  => 'required',
   //  'questionFourtyB'                  => 'required',
   //  'questionFourtyC'                  => 'required',
    'references'                       => 'required',

    'governmentIssuedID'               => 'required',
    'governmentIssuedIDNo'             => 'required',
    'governmentIDDateOrPlaceIssued'    => 'required',

    'oathDateAccomplished'             => 'required',

    'subscribedAndSwornDate'           => 'required',

   //  'children'                         => 'required',

   ]);

   $personalInfo = DB::table('personal_data_sheet_personal_information')
              ->where('user_id', $request->user)
              ->update([
                'last_name'                       => $request->personalSurname,
              'first_name'                      => $request->personalFirstName,
              'middle_name'                     => $request->personalMiddleName,
              'suffix'                          => $request->personalSuffix,
              'date_of_birth'                   => $request->personalDateOfBirth,
              'place_of_birth'                  => $request->personalPlaceOfBirth,
              'sex'                             => $request->personalSex,
              'civil_status'                    => $request->personalCivilStatus,
              'height'                          => $request->personalHeight,
              'weight'                          => $request->personalWeight,
              'blood_type'                      => $request->personalBloodType,
              'gsis_id_no'                      => $request->personalGSISIDNo,
              'pag_ibig_id_no'                  => $request->personalPAGIBIGIDNo,
              'sss_no'                          => $request->personalSSSNo,
              'tin_no'                          => $request->personalTinNo,
              'philhealth_no'                   => $request->personalPHILHEALTHNo,
              'agency_employee_no'              => $request->personalAgencyEmployeeNo,
              'citizenship'                     => $request->personalCitizenship,
              'dual_citizenship'                => $request->personalDualCitizenship,
              'country_of_citizenship'          => $request->countryOfCitizenship,
              'residential_address_house_no'    => $request->personalResAddressHouseNo,
              'residential_address_street'      => $request->personalResAddressStreet,
              'residential_address_subdivision' => $request->personalResAddressSubdivision,
              'residential_address_barangay'    => $request->personalResAddressBarangay,
              'residential_address_city'        => $request->personalResAddressCity,
              'residential_address_province'    => $request->personalResAddressProvince,
              'residential_address_zip_code'    => $request->personalZipCode,
              'permanent_address_house_no'      => $request->personalPermanentAddHouseNo,
              'permanent_address_street'        => $request->personalPermanentAddStreet,
              'permanent_address_subdivision'   => $request->personalPermanentAddSubdivision,
              'permanent_address_barangay'      => $request->personalPermanentAddBarangay,
              'permanent_address_city'          => $request->personalPermanentAddCity,
              'permanent_address_province'      => $request->personalPermanentAddProvince,
              'permanent_address_zip_code'      => $request->personalPermanentAddZipCode,
              'telephone_no'                    => $request->personalTelephoneNo,
              'mobile_no'                       => $request->personalMobileNo,
              'email_address'                   => $request->personalEmailAddress,
              //  'educational_signature'                       => $request->educBackgroundSignature,
              'educational_date_signed'         => $request->educBackgroundDateOfSignature,
              //  'work_experience_signature'                       => $request->workExperienceSignature,
              'work_experience_date_signed'     => $request->workExperienceDateOfSignature,
              //  'other_info_signature'                       => $request->otherInfoSignature,
              'other_info_date_signed'          => $request->otherInfoDateOfSignature,]);

              $familyBackground = DB::table('personal_data_sheet_family_backgrounds')
              ->where('user_id', $request->user)
                ->update([
                'spouse_last_name'        => $request->familySpouseSurname,
                'spouse_first_name'       => $request->familySpouseFirstName,
                'spouse_middle_name'      => $request->familySpouseMiddleName,
                'spouse_suffix'           => $request->familySpouseSuffix,
                'spouse_occupation'       => $request->familySpouseOccupation,
                'spouse_employer'         => $request->familyEmployerName,
                'spouse_business_address' => $request->familyBusinessAddress,
                'spouse_telephone_no'     => $request->familyTelephoneNo,
                'second_child' =>$request->secondChild,
                'third_child' =>$request->thirdChild,
                'fourth_child' =>$request->fourthChild,
                'fifth_child' =>$request->fifthChild,
                'sixth_child' =>$request->sixthChild,
                'spouse_date_of_birth'    => $request->dateOfBirthSpouse,
                'father_last_name'        => $request->familyFatherSurname,
                'father_first_name'       => $request->familyFatherFirstName,
                'father_middle_name'      => $request->familyFatherMiddleName,
                'father_suffix'           => $request->familyFatherSuffix,
                'father_date_of_birth'    => $request->dateOfBirthFather,
                'mother_maiden_name'      => $request->familyMotherMaidenName,
                'mother_last_name'        => $request->familyMotherSurname,
                'mother_first_name'       => $request->familyMotherFirstName,
                'mother_middle_name'      => $request->familyMotherMiddleName,
                'mother_date_of_birth'    => $request->dateOfBirthMother,
              ]);

  foreach ($request->educationalBackground as $educBackground) {
   // return $educBackground['educBackgroundLevel'];
   $educationalBackground = new PersonalDataSheetEducationalBackground([
    'user_id'                    => $request->user,
    'level'                      => $educBackground['educBackgroundLevel'],
    'name_of_school'             => $educBackground['educBackgroundNameOfSchool'],
    'basic_education_course'     => $educBackground['educBackgroundBasicEducation'],
    'period_of_attendance_from'  => $educBackground['educBackgroundPeriodOfAttendanceFrom'],
    'period_of_attendance_to'    => $educBackground['educBackgroundPeriodOfAttendanceTo'],
    'highest_level_units_earned' => $educBackground['educBackgroundHighestLevel'],
    'year_graduated'             => $educBackground['educBackgroundYearGraduated'],
    'academic_honors_received'   => $educBackground['educBackgroundScholarship'],
   ]);
   try {
    $deleted = DB::table('personal_data_sheet_educational_backgrounds')->where('user_id', $request->user)->delete();
    if($deleted>0){
      $educationalBackground->save();
    }

   } catch (Throwable $e) {
    return $e;
   }
  }
  // foreach ($request->children as $child) {
  //  // return $educBackground['educBackgroundLevel'];
  //  $children = new Children([
  //   'user_id'    => $request->user,
  //   'child_name' => $child['childName'],
  //  ]);
  //  try {
  //   DB::table('childrens')->where('user_id', $request->user)->delete();
  //   $children->save();
  //  } catch (Throwable $e) {
  //   return $e;
  //  }

  // }

  foreach ($request->civilServiceEligibility as $civilServ) {
   $civilServiceEligibility = new CivilServiceEligibility([
    'user_id'                  => $request->user,
    'career_service'           => $civilServ['careerService'],
    'rating'                   => $civilServ['rating'],
    'date_of_examination'      => $civilServ['dateOfExamination'],
    'place_of_examination'     => $civilServ['placeOfExamination'],
    'license_number'           => $civilServ['licenseNumber'],
    'license_date_of_validity' => $civilServ['dateOfValidity'],
   ]);
   try {
    $deleted = DB::table('civil_service_eligibilities')->where('user_id', $request->user)->delete();
    if($deleted>0){
      $civilServiceEligibility->save();
    }
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->workExperience as $workExp) {
   $workExperience = new WorkExperience([
    'user_id'                   => $request->user,
    'work_inclusive_dates_from' => $workExp['inclusiveDateFromWorkExperience'],
    'work_inclusive_dates_to'   => $workExp['inclusiveDateToWorkExperience'],
    'position'                  => $workExp['positionTitleWorkExperience'],
    'department'                => $workExp['departmentWorkExperience'],
    'monthly_salary'            => $workExp['monthlySalaryWorkExperience'],
    'salary_grade'              => $workExp['salaryGradeWorkExperience'],
    'status_of_appointment'     => $workExp['statusOfAppointmentWorkExperience'],
    'government_service'        => $workExp['governmentServiceWorkExperience'],
   ]);
   try {
    $deleted = DB::table('work_experiences')->where('user_id', $request->user)->delete();
    if($deleted>0){
    $workExperience->save();
    }
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->voluntaryWorkInvolvement as $volWork) {
   $voluntaryWorkInvolvement = new VoluntaryWorkInvolvement([
    'user_id'                        => $request->user,
    'organization_name_and_address'  => $volWork['nameAndAddressOfOrgVolWork'],
    'voluntary_inclusive_dates_from' => $volWork['inclusiveDatesFromVolWork'],
    'voluntary_inclusive_dates_to'   => $volWork['inclusiveDatesToVolWork'],
    'number_of_hours'                => $volWork['numberOfHoursVolWork'],
    'position'                       => $volWork['positionOfWorkVolWork'],
   ]);
   try {
    $deleted = DB::table('voluntary_work_involvements')->where('user_id', $request->user)->delete();
    if($deleted>0){
    $voluntaryWorkInvolvement->save();
    }
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->learningAndDevelopment as $learnAndDev) {
   $learningAndDevelopment = new LearningAndDevelopment([
    'user_id'                                => $request->user,
    'learning_and_development_interventions' => $learnAndDev['learningAndDevelopmentInterventions'],
    'learning_inclusive_dates_from'          => $learnAndDev['learningAndDevelopmentInclusiveDatesFrom'],
    'learning_inclusive_dates_to'            => $learnAndDev['learningAndDevelopmentInclusiveDatesTo'],
    'number_of_hours'                        => $learnAndDev['learningAndDevelopmentNumberOfHours'],
    'type_of_ld'                             => $learnAndDev['learningAndDevelopmentTypeOfLD'],
    'conducted_by'                           => $learnAndDev['learningAndDevelopmentConductedBy'],
   ]);
   try {
    $deleted = DB::table('learning_and_developments')->where('user_id', $request->user)->delete();
    if($deleted>0){
    $learningAndDevelopment->save();
    }
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->otherInfo as $otherInfo) {
   $otherInfo = new OtherInfo([
    'user_id'                    => $request->user,
    'special_skills_and_hobbies' => $otherInfo['otherInfoSpecialSkills'],
    'nonacademic_distinctions' => $otherInfo['otherInfoNonacademicDistinctions'],
    'association_members' => $otherInfo['otherInfoAssociationMembers'],
   ]);
   try {
    DB::table('other_info')->where('user_id', $request->user)->delete();
    $otherInfo->save();
   } catch (Throwable $e) {
    return $e;
   }
  }

  foreach ($request->references as $reference) {
   $references = new References([
    'user_id'           => $request->user,
    'reference_name'    => $reference['name'],
    'reference_address' => $reference['address'],
    'reference_tel_no'  => $reference['telephoneNo'],
   ]);
   try {
    $deleted = DB::table('references')->where('user_id', $request->user)->delete();
    if($deleted>0){
    $references->save();
    }
   } catch (Throwable $e) {
    return $e;
   }
  }
  $pdsQuestions = DB::table('pds_questions')
  ->where('user_id', $request->user)
    ->update([
   'question_thirty_four'                  => $request->questionThirtyFour,
   'question_thirty_five_a'                => $request->questionThirtyFiveA,
   'question_thirty_five_b_date_filed'     => $request->questionThirtyFiveBDateFiled,
   'question_thirty_five_B_status_of_case' => $request->questionThirtyFiveBStatusOfCase,
   'question_thirty_six'                   => $request->questionThirtySix,
   'question_thirty_seven'                 => $request->questionThirtySeven,
   'question_thirty_eight_a'                 => $request->questionThirtyEightA,
   'question_thirty_eight_b'                 => $request->questionThirtyEightB,
   'question_thirty_nine'                  => $request->questionThirtyNine,
   'question_forty_a'                      => $request->questionFourtyA,
   'question_forty_b'                      => $request->questionFourtyB,
   'question_forty_c'                      => $request->questionFourtyC,
  ]);

  $pdsQuestions = DB::table('pds_additonal_infos')
  ->where('user_id', $request->user)
    ->update([
   //  'oath'                      => $request->oathSignature,
   'government_id'          => $request->governmentIssuedID,
   'id_no'                  => $request->governmentIssuedIDNo,
   'date_place_of_issuance' => $request->governmentIDDateOrPlaceIssued,
   //  'signature'                 => $request->oathSignature,
   'oath_date_accomplished' => $request->oathDateAccomplished,
   //  'photo'                     => $request->personalPhotoAttachment,
   //  'right_thumbmark'           => $request->rightThumbMark,
   'sworn_date'             => $request->subscribedAndSwornDate,
   //  'person_administering_oath' => $request->personAdministeringOath,
  ]);

  try {
    if($personalInfo > 0  && $familyBackground >0 && $pdsQuestions>0 && $pdsAdditionalInfo > 0){

      return 'success';
    }

  } catch (Throwable $error) {
   return $error;
  }

 }
}
