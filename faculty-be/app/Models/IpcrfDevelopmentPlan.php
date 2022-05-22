<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class IpcrfDevelopmentPlan extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
            'school_year' ,
            'ratee',
            'rater' ,
            'strengths_functional' ,
            'strengths_core',
            'development_needs_functional',
            'development_needs_core' ,
            'learning_objectives_functional',
            'learning_objectives_core',
            'intervention_functional',
            'intervention_core',
            'timeline_functional',
            'timeline_core',
            'feedback',
            'resources_needed_functional',
            'resources_needed_core',
            'approving_authority'
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
}
