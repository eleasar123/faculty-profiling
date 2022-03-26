<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\AgeRange;
use App\Models\ApproverPosition;
use App\Models\AreaOfSpecialization;
use App\Models\CurricularClassification;
use App\Models\Division;
use App\Models\EmploymentStatus;
use App\Models\GradeLevelTaught;
use App\Models\HighestDegreeObtained;
use App\Models\LevelTaught;
use App\Models\PersonnelPosition;
use App\Models\RaterPosition;
use App\Models\Region;
use App\Models\Role;
use App\Models\SchoolSize;
use App\Models\SchoolType;
use App\Models\Sex;
use App\Models\SubjectCot1;
use App\Models\SubjectsTaught;
use App\Models\Suffix;
use App\Models\YearsOfTeaching;

class MasterfileController extends Controller
{
    public function index()
    {
        // return 'Success';
        return User::all();
    }

    public function showSubjectCot1()
    
    {
        return SubjectCot1::all();
    }

    public function showAgeRange()
    {
        return AgeRange::all();
        // return User::all();

    }

    public function showEmploymentStatus()
    {
        return EmploymentStatus::all();
    }

    public function showSuffix()
    {
        return Suffix::all();
    }

    public function showGradeLevelTaught()
    {
        return GradeLevelTaught::all();
    }

    public function showRaterPosition()
    {
        return RaterPosition::all();
    }

    public function showApproverPosition()
    {
        return ApproverPosition::all();
    }

    public function showRegion()
    {
        return Region::all();
    }

    public function showSex()
    {
        return Sex::all();
    }

    public function showDivision()
    {
        return Division::all();
    }

    public function showSchoolSize()
    {
        return SchoolSize::all();
    }

    public function showCurricularClassification()
    {
        return CurricularClassification::all();
    }

    public function showAreaOfSpecialization()
    {
        return AreaOfSpecialization::all();
    }

    public function showSchoolType()
    {
        return SchoolType::all();
    }

    public function showYearsOfTeaching()
    {
        return YearsOfTeaching::all();
    }

    public function showRole()
    {
        return Role::all();
    }

    public function showLevelTaught()
    {
        return LevelTaught::all();
    }

    public function showSubjectsTaught()
    {
        return SubjectsTaught::all();
    }

    public function showHighestDegreeObtained()
    {
        return HighestDegreeObtained::all();
    }

    public function showPersonnelPosition()
    {
        return PersonnelPosition::all();
    }
}
