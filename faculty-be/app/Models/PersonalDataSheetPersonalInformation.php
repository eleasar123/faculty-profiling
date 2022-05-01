<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class PersonalDataSheetPersonalInformation extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //personal information
        'user_id',
        'last_name',
        'first_name',
        'middle_name',
        'suffix',
        'date_of_birth',   
        'place_of_birth',
        'sex', 
        'civil_status',
        'height',
        'weight',
        'blood_type',
        'gsis_id_no',
        'pag_ibig_id_no',
        'philhealth_no',
        'sss_no',
        'tin_no',
        'agency_employee_no',
        'citizenship',
        'dual_citizenship',
        'residential_address_house_no',
        'residential_address_street',
        'residential_address_subdivision',
        'residential_address_barangay',
        'residential_address_city',
        'residential_address_province',
        'residential_address_zip_code',
        'permanent_address_house_no',
        'permanent_address_street',
        'permanent_address_subdivision',
        'permanent_address_barangay',
        'permanent_address_city',
        'permanent_address_province',
        'permanent_address_zip_code',
        'telephone_no',
        'mobile_no',
        'email_address',
        'signature',
        'date_signed',
        
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }

}
