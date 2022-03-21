<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearsOfTraining extends Model
{
    use HasFactory;

    protected $fillable = [
        'years_of_training',
        'modified_by'
    ];
}
