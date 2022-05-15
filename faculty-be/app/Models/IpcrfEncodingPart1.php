<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class IpcrfEncodingPart1 extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'user_id',
        'subject_cot1',
        'objective_no',
        'cot_indicator_no',
        'rating_cot1',
        'rpms_5pt_scale_cot1',
        'rating_cot2',
        'rpms_5pt_scale_cot2',
        'cot3',
        'cot4',
        'average_cot',
        'ipcrf_numerical_ratings_q',
        'ipcrf_numerical_ratings_e',
        'ipcrf_numerical_ratings_t',
        'ipcrf_numerical_ratings_average',
        'ipcrf_numerical_ratings_score',
        'ipcrf_numerical_ratings_adjectival_rating',
        'school_year',
        'date_observed',
        'final_rating',
        'adjectival_rating',
        'approving_authority',
        'approver_position',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
}
