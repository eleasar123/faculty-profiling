<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class IpcrfDemographicProfile extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

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
    ];
}
