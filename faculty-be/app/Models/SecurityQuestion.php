<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityQuestion extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'question_one',
        'question_two',
        'question_three'
    ];
}
