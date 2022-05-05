<?php

namespace App\Http\Controllers;

use App\Models\Children;
use App\Models\CivilServiceEligibility;
use App\Models\LearningAndDevelopment;
use App\Models\OtherInfoAssociationMembers;
use App\Models\OtherInfoNonacademicDistinctions;
use App\Models\OtherInfoSpecialSkills;
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

class PersonalInfoController extends Controller
{
 //receive image
 public function handleImage(Request $request)
 {
  //  return $request->all();
  $request->validate([
   'fileEducBackgroundSignature' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048',
  ]);
  if ($request->hasFile('fileEducBackgroundSignature')) {
  $image           = $request->file('fileEducBackgroundSignature');
   $destinationPath = 'public/signatures/educational-background/';
   $imageName       = $image->getClientOriginalName();
   $path            = $request->file('fileEducBackgroundSignature')->storeAs($destinationPath, $imageName);
   $input['image']  = $imageName;
  }
  if ($request->hasFile('fileWorkExperienceSignature')) {
    $destinationPath = `public/signatures/personalInfo/$request->user`;
    $image           = $request->file('educBackgroundSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
    $input['image']  = $imageName;
   }
   if ($request->hasFile('fileOtherInfoSignature')) {

    $destinationPath = `public/signatures/personalInfo/$request->user`;
    $image           = $request->file('educBackgroundSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
    $input['image']  = $imageName;
   }
   if ($request->hasFile('personalPhotoAttachment')) {
    $destinationPath = `public/signatures/personalInfo/$request->user`;
    $image           = $request->file('educBackgroundSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
    $input['image']  = $imageName;
   }
   if ($request->hasFile('oathSignature')) {
    $destinationPath = `public/signatures/personalInfo/$request->user`;
    $image           = $request->file('educBackgroundSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
    $input['image']  = $imageName;
   }
   if ($request->hasFile('rightThumbMark')) {
    $destinationPath = `public/signatures/personalInfo/$request->user`;
    $image           = $request->file('educBackgroundSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
    $input['image']  = $imageName;
   }
   if ($request->hasFile('personAdministeringOath')) {
    $destinationPath = `public/signatures/personalInfo/$request->user`;
    $image           = $request->file('educBackgroundSignature');
    $imageName       = $image->getClientOriginalName();
    $path            = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
    $input['image']  = $imageName;
   }
  $affected = DB::table('users')
   ->where('id', 1)
   ->update(['votes' => 1]);
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
  $pds->push([['otherInfoSpecialSkills' => OtherInfoSpecialSkills::all()]]);
  $pds->push([['otherInfoNonacademicDistinctions' => OtherInfoNonacademicDistinctions::all()]]);
  $pds->push([['otherInfoAssociationMembers' => OtherInfoAssociationMembers::all()]]);
  $pds->push([['references' => References::all()]]);
  $pds->push([['pdsQuestions' => PdsQuestions::all()]]);
  $pds->push([['pdsAdditionalInfo' => PdsAdditionalInfo::all()]]);

  return $pds;

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
  $pds->push([['otherInfoSpecialSkills' => OtherInfoSpecialSkills::where('user_id', $id)->get()]]);
  $pds->push([['otherInfoNonacademicDistinctions' => OtherInfoNonacademicDistinctions::where('user_id', $id)->get()]]);
  $pds->push([['otherInfoAssociationMembers' => OtherInfoAssociationMembers::where('user_id', $id)->get()]]);
  $pds->push([['references' => References::where('user_id', $id)->get()]]);
  $pds->push([['pdsQuestions' => PdsQuestions::where('user_id', $id)->get()]]);
  $pds->push([['pdsAdditionalInfo' => PdsAdditionalInfo::where('user_id', $id)->get()]]);

  return $pds;

 }

 public function createPds(Request $request)
 {

  $request->validate([
   'user'                             => 'required',
   'personalSurname'                  => 'required',
   'personalFirstName'                => 'required',
   'personalMiddleName'               => 'required',
   'personalSuffix'                   => 'required',
   'personalDateOfBirth'              => 'required',
   'personalPlaceOfBirth'             => 'required',
   'personalCitizenship'              => 'required',
   'personalDualCitizenship'          => 'required',
   'countryOfCitizenship'             => 'required',
   'personalSex'                      => 'required',
   'personalCivilStatus'              => 'required',
   'personalHeight'                   => 'required',
   'personalWeight'                   => 'required',
   'personalBloodType'                => 'required',
   'personalGSISIDNo'                 => 'required',
   'personalPHILHEALTHNo'             => 'required',
   'personalResAddressHouseNo'        => 'required',
   'personalResAddressStreet'         => 'required',
   'personalResAddressSubdivision'    => 'required',
   'personalResAddressBarangay'       => 'required',
   'personalResAddressCity'           => 'required',
   'personalResAddressProvince'       => 'required',
   'personalZipCode'                  => 'required',
   'personalPAGIBIGIDNo'              => 'required',
   'personalPHILHEALTHNo'             => 'required',
   'personalPermanentAddHouseNo'      => 'required',
   'personalPermanentAddStreet'       => 'required',
   'personalPermanentAddSubdivision'  => 'required',
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
   'familySpouseSurname'              => 'required',
   'familySpouseFirstName'            => 'required',
   'familySpouseMiddleName'           => 'required',
   'familySpouseSuffix'               => 'required',
   'familySpouseOccupation'           => 'required',
   'familyEmployerName'               => 'required',
   'familyBusinessAddress'            => 'required',
   'familyTelephoneNo'                => 'required',
   'familyFatherSurname'              => 'required',
   'familyFatherFirstName'            => 'required',
   'familyFatherMiddleName'           => 'required',
   'familyFatherSuffix'               => 'required',
   'familyMotherMaidenName'           => 'required',
   'familyMotherSurname'              => 'required',
   'familyMotherFirstName'            => 'required',
   'familyMotherMiddleName'           => 'required',
   'dateOfBirthSpouse'                => 'required',
   'dateOfBirthFather'                => 'required',
   'dateOfBirthMother'                => 'required',
   'educationalBackground'            => 'required',

   'educBackgroundDateOfSignature'    => 'required',
   'civilServiceEligibility'          => 'required',
   'workExperience'                   => 'required',

   'workExperienceDateOfSignature'    => 'required',
   'voluntaryWorkInvolvement'         => 'required',
   'learningAndDevelopment'           => 'required',
   'otherInfoSpecialSkills'           => 'required',
   'otherInfoNonacademicDistinctions' => 'required',
   'otherInfoAssociationMembers'      => 'required',

   'otherInfoDateOfSignature'         => 'required',
   'otherInfoAssociationMembers'      => 'required',
   'questionThirtyFour'               => 'required',
   'questionThirtyFiveA'              => 'required',
   'questionThirtyFiveBDateFiled'     => 'required',
   'questionThirtyFiveBStatusOfCase'  => 'required',
   'questionThirtySix'                => 'required',
   'questionThirtySeven'              => 'required',
   'questionThirtyEight'              => 'required',
   'questionThirtyNine'               => 'required',
   'questionFourtyA'                  => 'required',
   'questionFourtyB'                  => 'required',
   'questionFourtyC'                  => 'required',
   'references'                       => 'required',

   'governmentIssuedID'               => 'required',
   'governmentIssuedIDNo'             => 'required',
   'governmentIDDateOrPlaceIssued'    => 'required',

   'oathDateAccomplished'             => 'required',

   'subscribedAndSwornDate'           => 'required',

   'children'                         => 'required',

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
  //Storage::disk('local')->put( 'public/educational-background/', $request->formDataEducationalBackground, ); //using multiple disks for storing files
  // Storage::put($request->educBackgroundSignature,'public');
  //$file = $request->file('formDataEducationalBackground')->isValid();
//  $path='';
//  foreach($request-> formDataEducationalBackground as $form){
//   $path=$form['fileName'];
//   dd($path);
//  }
  if ($request->hasFile('file')) {
   return 'hello';
  }
  //$request->file('formDataEducationalBackground');
//  $input = $request->file('formDataEducationalBackground');
//  return $input;
//  return($input);
  //Storage::disk('local')->putFile("app/public/pds", $request->educBackgroundSignature);
  // $content = 'Hello World';
  // Storage::put('avatars/2', $file);

  // Storage::put($request->file('educBackgroundSignature')->name, $file);
  // $name = $file->getClientOriginalName();
  // return($name);
  // $extension = $file->getClientOriginalExtension();

  // if($file){
  //   return("true");
  //   $destinationPath = 'public/signatures/personalInfo';
  //   $image =$request->file('educBackgroundSignature');
  //   $imageName = $image->getClientOriginalName();
  //   $path = $request->file('educBackgroundSignature')->storeAs($destinationPath, $imageName);
  //   //$input['image'] = $imageName;
  // }
  // return $file;
  //Storage::putFile( 'signatures', new File($request->educBackgroundSignature ), ); //if using one or default disk
  // php artisan storage:link
  //echo asset('storage/file.txt');

  //Retrieving files
//  $contents = Storage::get('file.jpg');
//  if (Storage::disk('s3')->exists('file.jpg')) {
//   // ...
// }
// if (Storage::disk('s3')->missing('file.jpg')) {
//   // ...
// }

// //Downloading the file
// return Storage::download('file.jpg');

// return Storage::download('file.jpg', $name, $headers);
// //getting the url of the file
// $url = Storage::url('file.jpg');
// //get the size of a file
// $size = Storage::size('file.jpg');

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
    return e;
   }
  }
  foreach ($request->children as $child) {
   // return $educBackground['educBackgroundLevel'];
   $children = new Children([
    'user_id'    => $request->user,
    'child_name' => $child['childName'],
   ]);
   try {
    $children->save();
   } catch (Throwable $e) {
    return e;
   }

  }

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

  foreach ($request->otherInfoSpecialSkills as $otherInfo) {
   $otherInfoSpecialSkills = new OtherInfoSpecialSkills([
    'user_id'                    => $request->user,
    'special_skills_and_hobbies' => $otherInfo['otherInformationSpecialSkills'],
   ]);
   try {
    $otherInfoSpecialSkills->save();
   } catch (Throwable $e) {
    return $e;
   }
  }
  foreach ($request->otherInfoNonacademicDistinctions as $otherInfo) {
   $otherInfoNonacademicDistinctions = new OtherInfoNonacademicDistinctions([
    'user_id'                   => $request->user,
    'non_academic_distinctions' => $otherInfo['otherInformationNonacademicDistinctions'],
   ]);
   try {
    $otherInfoNonacademicDistinctions->save();
   } catch (Throwable $e) {
    return $e;
   }
  }
  foreach ($request->otherInfoAssociationMembers as $otherInfo) {
   $otherInfoAssociationMembers = new OtherInfoAssociationMembers([
    'user_id'             => $request->user,
    'association_members' => $otherInfo['otherInformationAssociationMembers'],
   ]);
   try {
    $otherInfoAssociationMembers->save();
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
   'question_thirty_eight'                 => $request->questionThirtyEight,
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
  //
  $request->validate([
   'user'                            => 'required',
   'personalSurname'                 => 'required',
   'personalFirstName'               => 'required',
   'personalMiddleName'              => 'required',
   'personalSuffix'                  => 'required',
   'personalDateOfBirth'             => 'required',
   'personalPlaceOfBirth'            => 'required',
   'personalCitizenship'             => 'required',
   'personalDualCitizenship'         => 'required',
   'personalSex'                     => 'required',
   'personalCivilStatus'             => 'required',
   'personalHeight'                  => 'required',
   'personalWeight'                  => 'required',
   'personalBloodType'               => 'required',
   'personalGSISIDNo'                => 'required',
   'personalResAddressHouseNo'       => 'required',
   'personalResAddressStreet'        => 'required',
   'personalResAddressSubdivision'   => 'required',
   'personalResAddressBarangay'      => 'required',
   'personalResAddressCity'          => 'required',
   'personalResAddressProvince'      => 'required',
   'personalZipCode'                 => 'required',
   'personalPAGIBIGIDNo'             => 'required',
   'personalPHILHEALTHNo'            => 'required',
   'personalPermanentAddHouseNo'     => 'required',
   'personalPermanentAddStreet'      => 'required',
   'personalPermanentAddSubdivision' => 'required',
   'personalPermanentAddBarangay'    => 'required',
   'personalPermanentAddCity'        => 'required',
   'personalPermanentAddProvince'    => 'required',
   'personalPermanentAddZipCode'     => 'required',
   'personalSSSNo'                   => 'required',
   'personalTelephoneNo'             => 'required',
   'personalTinNo'                   => 'required',
   'personalMobileNo'                => 'required',
   'personalAgencyEmployeeNo'        => 'required',
   'personalEmailAddress'            => 'required',
   'familySpouseSurname'             => 'required',
   'familySpouseFirstName'           => 'required',
   'familySpouseMiddleName'          => 'required',
   'familySpouseSuffix'              => 'required',
   'familySpouseOccupation'          => 'required',
   'familyEmployerName'              => 'required',
   'familyBusinessAddress'           => 'required',
   'familyTelephoneNo'               => 'required',
   'familyFatherSurname'             => 'required',
   'familyFatherFirstName'           => 'required',
   'familyFatherMiddleName'          => 'required',
   'familyFatherSuffix'              => 'required',
   'familyMotherMaidenName'          => 'required',
   'familyMotherSurname'             => 'required',
   'familyMotherFirstName'           => 'required',
   'familyMotherMiddleName'          => 'required',
   'nameOfChildrenOne'               => 'required',
   'nameOfChildrenTwo'               => 'required',
   'nameOfChildrenThree'             => 'required',
   'nameOfChildrenFour'              => 'required',
   'nameOfChildrenFive'              => 'required',
   'nameOfChildrenSix'               => 'required',
   'nameOfChildrenSeven'             => 'required',
   'nameOfChildrenEight'             => 'required',
   'nameOfChildrenNine'              => 'required',
   'nameOfChildrenTen'               => 'required',
   'nameOfChildrenEleven'            => 'required',
   'nameOfChildrenTwelve'            => 'required',
   'nameOfChildrenThirteen'          => 'required',
   'dateOfBirthOne'                  => 'required',
   'dateOfBirthTwo'                  => 'required',
   'dateOfBirthThree'                => 'required',
   'dateOfBirthFour'                 => 'required',
   'dateOfBirthFive'                 => 'required',
   'dateOfBirthSix'                  => 'required',
   'dateOfBirthSeven'                => 'required',
   'dateOfBirthEight'                => 'required',
   'dateOfBirthNine'                 => 'required',
   'dateOfBirthTen'                  => 'required',
   'dateOfBirthEleven'               => 'required',
   'dateOfBirthTwelve'               => 'required',
   'dateOfBirthThirteen'             => 'required',
   'educationalBackground'           => 'required',
   'formDataEducationalBackground'   => 'required',
   'educBackgroundDateOfSignature'   => 'required',
   'civilServiceEligibility'         => 'required',
   'workExperience'                  => 'required',
   'workExperienceSignature'         => 'required',
   'workExperienceDateOfSignature'   => 'required',
   'voluntaryWorkInvolvement'        => 'required',
   'learningAndDevelopment'          => 'required',
   'otherInformation'                => 'required',
   'questionThirtyFour'              => 'required',
   'questionThirtyFiveA'             => 'required',
   'questionThirtyFiveDateFiled'     => 'required',
   'questionThirtyFiveCaseStatus'    => 'required',
   'questionThirtySix'               => 'required',
   'questionThirtySeven'             => 'required',
   'questionThirtyEight'             => 'required',
   'questionThirtyNine'              => 'required',
   'questionFourtyA'                 => 'required',
   'questionFourtyB'                 => 'required',
   'questionFourtyC'                 => 'required',
   'referenceNameFirst'              => 'required',
   'referenceAddressFirst'           => 'required',
   'referenceTelNoFirst'             => 'required',
   'referenceNameSecond'             => 'required',
   'referenceAddressSecond'          => 'required',
   'referenceTelNoSecond'            => 'required',
   'referenceNameThird'              => 'required',
   'referenceAddressThird'           => 'required',
   'referenceTelNoThird'             => 'required',
   'personalPhotoAttachment'         => 'required',
   'governmentIssuedID'              => 'required',
   'governmentIssuedIDNo'            => 'required',
   'governmentIDDateOrPlaceIssued'   => 'required',
   'oathSignature'                   => 'required',
   'oathDateAccomplished'            => 'required',
   'rightThumbMark'                  => 'required',
   'subscribedAndSwornDate'          => 'required',
   'personAdministeringOath'         => 'required',

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
   'height'                          => $request->personaHeight,
   'weight'                          => $request->personalWeight,
   'blood_type'                      => $request->personalBloodType,
   'gsis_id_no'                      => $request->personalGSISIDNo,
   'pag-ibig_id_no'                  => $request->personalPAGIBIGIDNo,
   'sss_no'                          => $request->personalSSSNo,
   'tin_no'                          => $request->personalTINNo,
   'agency_employee_no'              => $request->personalAgencyEmployeeNo,
   'citizenship'                     => $request->personalCitizenship,
   'dual_citizenship'                => $request->personalDualCitizenship,
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
   'signature'                       => $request->educBackgroundSignature,
   'date_signed'                     => $request->educBackgroundDateOfSignature,
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
   'spouse_children'         => $request->spouse_children,
   'father_last_name'        => $request->familyFatherSurname,
   'father_first_name'       => $request->familyFatherFirstName,
   'father_middle_name'      => $request->familyFatherMiddleName,
   'father_suffix'           => $request->familyFatherSuffix,
   'father_occupation'       => $request->father_occupation,
   'spouse_employer'         => $request->father_employer,
   'father_business_address' => $request->father_business_address,
   'father_telephone_no'     => $request->father_telephone_no,
   'father_children'         => $request->father_children,
   'mother_maiden_name'      => $request->familyMotherMaidenName,
   'mother_last_name'        => $request->mother_last_name,
   'mother_first_name'       => $request->mother_first_name,
   'mother_middle_name'      => $request->mother_middle_name,
   'mother_suffix'           => $request->mother_suffix,
   'mother_occupation'       => $request->mother_occupation,
   'souse_employer'          => $request->mother_employer,
   'mother_business_address' => $request->mother_business_address,
   'mother_telephone_no'     => $request->mother_telephone_no,
   'mother_children'         => $request->mother_children,
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
    'highest_level/units_earned' => $educBackground['educBackgroundHighestLevel'],
    'year_graduated'             => $educBackground['educBackgroundYearGraduated'],
    'academic_honors_received'   => $educBackground['educBackgroundScholarship'],
   ]);
   try {
    $educationalBackground->save();
   } catch (Throwable $e) {
    return e;
   }

  }

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

  foreach ($request->otherInformation as $otherInfo) {
   $otherInformation = new OtherInformation([
    'user_id'                    => $request->user,
    'special_skills_and_hobbies' => $otherInfo['otherInformationSpecialSkills'],
    'non-academic_distinctions'  => $otherInfo['otherInformationNonacademicDistinctions'],
    'organization_membership'    => $otherInfo['otherInformationAssociationMembers'],
   ]);
   try {
    $otherInformation->save();
   } catch (Throwable $e) {
    return $e;
   }
  }
  $references = new References([
   'user_id'           => $request->user,
   'reference_name'    => $request->reference_name,
   'reference_address' => $request->reference_address,
   'reference_tel_no'  => $request->reference_tel_no,
  ]);

  $pdsQuestions = new PdsQuestions([
   'user_id'   => $request->user,
   'questions' => $request->questions,
   'answer'    => $request->answer,
  ]);

  $pdsAdditionalInfo = new PdsAdditionalInfo([
   'user_id'                   => $request->user,
   'oath'                      => $request->oath,
   'government_id'             => $request->government_id,
   'id_no'                     => $request->id_no,
   'date/place_of_issuance'    => $request->date_place_of_issuance,
   'signature'                 => $request->signature,
   'photo'                     => $request->photo,
   'right_thumbmark'           => $request->right_thumbmark,
   'sworn_date'                => $request->sworn_date,
   'person_administering_oath' => $request->person_administering_oath,
  ]);

  try {
   $personalInfo->save();
   $familyBackground->save();
   $references->save();
   $pdsQuestions->save();
   $pdsAdditionalInfo->save();
   $pds                 = collect();
   $message             = "success";
   $personalInfoId      = DB::table('personal_data_sheet_personal_information')->where('user_id', $request->user)->get();
   $pdsAdditionalInfoId = DB::table('pds_additional_infos')->where('user_id', $request->user)->get();

  } catch (Throwable $error) {
   return $error;
  }

 }

}
