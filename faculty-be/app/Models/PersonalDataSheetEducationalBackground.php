<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class PersonalDataSheetEducationalBackground extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    //educational background
        'user',
        'level',
        'name_of_school',
        'basic_education/course',
        'period_of_attendance_from',
        'period_of_attendance_to',
        'highest_level/units_earned',
        'year_graduated',
        'academic_honors_received',
    ];
}
