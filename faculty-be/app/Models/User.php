<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\PersonalDataSheetPersonalInformation;
use App\Models\PersonalDataSheetFamilyBackground;
use App\Models\PersonalDataSheetEducationalBackground;
use App\Models\CivilServiceEligibility;
use App\Models\WorkExperience;
use App\Models\VoluntaryWorkInvolvement;
use App\Models\LearningAndDevelopment;
use App\Models\OtherInformation;
use App\Models\PdsQuestions;
use App\Models\References;
use App\Models\PdsAdditionalInfo;
use App\Models\IpcrfDemographicProfile;
use App\Models\IpcrfEncodingPart1;
use App\Models\IpcrfEncodingPart2;
use App\Models\IpcrfDevelopmentPlan;
use App\Models\EsatDemographicProfile;
use App\Models\EsatCoreBehavioralCompetencies;
use App\Models\EsatFunctionalObjectives;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'profile'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pdsPersonalInfo()
    {
        return $this->hasOne(PersonalDataSheetPersonalInformation::class);
    }

    public function pdsFamilyBackground()
    {
        return $this->hasOne(PersonalDataSheetFamilyBackground::class);
    }

    public function pdsEducationalBackground()
    {
        return $this->hasOne(PersonalDataSheetEducationalBackground::class);
    }

    public function pdsCivilServiceEligibilty()
    {
        return $this->hasOne(CivilServiceEligibilty::class);
    }

    public function pdsWorkExperience()
    {
        return $this->hasOne(WorkExperience::class);
    }

    public function pdsVoluntaryWorkInvolvement()
    {
        return $this->hasOne(VoluntaryWorkInvolvement::class);
    }

    public function pdsLearningAndDevelopment()
    {
        return $this->hasOne(LearningAndDevelopment::class);
    }

    public function pdsOtherInformation()
    {
        return $this->hasOne(OtherInformation::class);
    }

    public function pdsQuestions()
    {
        return $this->hasOne(PdsQuestions::class);
    }

    public function pdsReferences()
    {
        return $this->hasOne(References::class);
    }

    public function pdsAdditionalInfo()
    {
        return $this->hasOne(PdsAdditionalInfo::class);
    }

    public function pdsOtherInfo()
    {
        return $this->hasOne(PersonalDataSheetPersonalInformation::class);
    }

    public function ipcrfDemographicProfile()
    {
        return $this->hasOne(IpcrfDemographicProfile::class);
    }

    public function ipcrfEncodingPart1()
    {
        return $this->hasOne(IpcrfEncodingPart1::class);
    }

    public function ipcrfEncodingPart2()
    {
        return $this->hasOne(IpcrfEncodingPart2::class);
    }

    public function ipcrfDevelopmentPlan()
    {
        return $this->hasOne(IpcrfDevelopmentPlan::class);
    }

    public function esatDemographicProfile()
    {
        return $this->hasOne(EsatDemographicProfile::class);
    }

    public function esatCoreBehavioralCompetencies()
    {
        return $this->hasOne(EsatCoreBehavioralCompetencies::class);
    }

    public function esatFunctionalObjectives()
    {
        return $this->hasOne(EsatFunctionalObjectives::class);
    }
    
}
