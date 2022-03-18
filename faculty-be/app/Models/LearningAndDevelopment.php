<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class LearningAndDevelopment extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
     //learning and development
        'user',
        'learning_and_development_interventions',
        'learning_inclusive_dates_from',
        'learning_inclusive_dates_to',
        'number_of_hours',
        'type_of_ld',
        'conducted_by',
    ];
}
