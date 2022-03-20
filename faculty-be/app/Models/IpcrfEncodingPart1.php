<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class IpcrfEncodingPart1 extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'user',
        'objective1',
        'objective2',
        'objective3',
        'objective4',
        'objective5',
        'subject',
        'objective6',
        'objective7',
        'objective8',
        'objective9',
        'objective10',
        'school_year',
        'personnel',
        'date_observed',
        'final_rating',
        'adjectival_rating',
        'approving_authority',
        'approver_position',
    ];
}
