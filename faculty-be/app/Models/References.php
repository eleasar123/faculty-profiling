<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\User;
class References extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
    //references
        'user_id',
        'reference_name',
        'reference_address',
        'reference_tel_no',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key'); 
        return $this->belongsTo(User::class);
    }
}
