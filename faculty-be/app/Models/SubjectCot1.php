<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
=======
>>>>>>> 6e1972665ad4032c181b8c3f700e36290c8de4b7
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SubjectCot1 extends Model
{
<<<<<<< HEAD
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
=======
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> 6e1972665ad4032c181b8c3f700e36290c8de4b7

    protected $fillable = [
        'subject'
    ];
}
