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
        'user',
        'ratee',
        'competency_type',
        'rater',
        'strengths',
        'development_needs',
        'learning_objectives',
        'timeline',
        'resources_needed',
        'approving_authority',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
}
