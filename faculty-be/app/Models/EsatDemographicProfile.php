<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
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

class EsatDemographicProfile extends Model
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
        'employee_id',
        'position',
        'employment_status',
        'age',
        'sex',

        'years_in_teaching',
        'highest_degree_obtained',
        'specified_highest_degree_obtained',
        'level_taught',
        'grade_level_taught',

        'region',
        'division',
        'employee_municipality',
        'school_id',
        'school_name',
        'school_type',
        'school_size',
        'curricular_classification',
        'area_of_specialization',
        'subjects_taught',
        'personal_comments',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function esatPosition()
    {
        return $this->hasOne(Position::class);
    }

    public function esatEmploymentStatus()
    {
        return $this->hasOne(EmploymentStatus::class);
    }

    public function esatAgeRange()
    {
        return $this->hasOne(AgeRange::class);
    }

    public function esatSex()
    {
        return $this->hasOne(Sex::class);
    }

    public function esatYearsOfTeaching()
    {
        return $this->hasOne(YearsOfTraining::class);
    }

    public function esatHighestDegreeObtained()
    {
        return $this->hasOne(HighestDegreeObtained::class);
    }

    public function esatLevelTaught()
    {
        return $this->hasOne(LevelTaught::class);
    }

    public function esatRegion()
    {
        return $this->hasOne(Region::class);
    }

    public function esatDivision()
    {
        return $this->hasOne(Division::class);
    }

    public function esatSchoolType()
    {
        return $this->hasOne(SchoolType::class);
    }

    public function esatSchoolSize()
    {
        return $this->hasOne(SchoolSize::class);
    }

    public function esatCurricularClassification()
    {
        return $this->hasOne(CurricularClassification::class);
    }
}
