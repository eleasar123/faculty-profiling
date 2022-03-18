<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class EsatDemographicProfile extends Model
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
        'years_in_teaching',
        'highest_degree_obtained',
        'region',
        'division',
        'school',
        'curricular_classification',
        'grade_level_taught',
        'area_of_specialization',
        'subjects_taught',
    ];
}
