<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
use App\Models\SubjectCot1;
use App\Models\Position;
use App\Models\EmploymentStatus;
use App\Models\AgeRange;
use App\Models\Sex;
use App\Models\YearsOfTeaching;
use App\Models\HighestDegreeObtained;
use App\Models\LevelTaught;
use App\Models\GradeLevelTaught;
use App\Models\Region;
use App\Models\Division;
use App\Models\SchoolType;
use App\Models\SchoolSize;
use App\Models\CurricularClassification;
use App\Models\ApproverPosition;
class IpcrfDemographicProfile extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'user_id',
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
        'school_year'
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }

    public function ipcrfSubjectCot1()
    {
        return $this->hasOne(SubjectCot1::class);
    }

    public function ipcrfPosition()
    {
        return $this->hasOne(Position::class);
    }

    public function ipcrfEmploymentStatus()
    {
        return $this->hasOne(EmploymentStatus::class);
    }

    public function ipcrfAgeRange()
    {
        return $this->hasOne(AgeRange::class);
    }

    public function ipcrfSex()
    {
        return $this->hasOne(Sex::class);
    }

    public function ipcrfYearsOfTeaching()
    {
        return $this->hasOne(YearsOfTraining::class);
    }

    public function ipcrfHighestDegreeObtained()
    {
        return $this->hasOne(HighestDegreeObtained::class);
    }

    public function ipcrfLevelTaught()
    {
        return $this->hasOne(LevelTaught::class);
    }

    public function ipcrfRegion()
    {
        return $this->hasOne(Region::class);
    }

    public function ipcrfDivision()
    {
        return $this->hasOne(Division::class);
    }

    public function ipcrfSchoolType()
    {
        return $this->hasOne(SchoolType::class);
    }

    public function ipcrfSchoolSize()
    {
        return $this->hasOne(SchoolSize::class);
    }

    public function ipcrfCurricularClassification()
    {
        return $this->hasOne(CurricularClassification::class);
    }

    public function ipcrfApproverPosition()
    {
        return $this->hasOne(ApproverPosition::class);
    }
}
