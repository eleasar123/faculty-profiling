<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PdsQuestions extends Model
{
    use HasFactory, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        //pds questions
        'user_id',
        'question_thirty_four',
        'question_thirty_five_a',
        'question_thirty_five_b_date_filed',
        'question_thirty_five_B_status_of_case',
        'question_thirty_six',
        'question_thirty_seven',
        'question_thirty_eight',
        'question_thirty_nine',
        'question_forty_a',
        'question_forty_b',
        'question_forty_c',
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'foreign_key');
        //return $this->belongsTo(User::class, 'foreign_key', 'owner_key');
        return $this->belongsTo(User::class);
    }
}
