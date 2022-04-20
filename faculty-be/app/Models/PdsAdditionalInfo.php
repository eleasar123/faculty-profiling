<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class PdsAdditionalInfo extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
     //pds additional info
        'user_id',
        'oath',
        'government_id',
        'id_no',
        'date/place_of_issuance',
        'signature',
        'photo',
        'right_thumbmark',
        'sworn_date',
        'person_administering_oath',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
    
}
