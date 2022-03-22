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
        'user',
        'spouse_last_name',
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_suffix',
        'spouse_occupation',   
        'souse_employer',
        'spouse_business_address', 
        'spouse_telephone_no',
        'spouse_children',
        'father_last_name',
        'father_first_name',
        'father_middle_name',
        'father_suffix',
        'father_occupation',   
        'father_employer',
        'father_business_address', 
        'father_telephone_no',
        'father_children',
        'mother_last_name',
        'mother_first_name',
        'mother_middle_name',
        'mother_suffix',
        'mother_occupation',   
        'mother_employer',
        'mother_business_address', 
        'mother_telephone_no',
        'mother_children',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
}
