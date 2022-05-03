<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class PersonalDataSheetFamilyBackground extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    //family background
        'user_id',
        'spouse_last_name',
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_suffix',
        'spouse_occupation',   
        'spouse_employer',
        'spouse_business_address', 
        'spouse_telephone_no',
        'spouse_date_of_birth',
        'father_last_name',
        'father_first_name',
        'father_middle_name',
        'father_suffix',
        'father_date_of_birth',
        'mother_maiden_name',
        'mother_last_name',
        'mother_first_name',
        'mother_middle_name',
        'mother_occupation', 
        'mother_date_of_birth',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
}
