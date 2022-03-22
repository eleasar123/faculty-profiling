<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearsOfTeaching extends Model
{
    use HasFactory;

    protected $fillable = [
        'years_of_teaching',
        'modified_by'
    ];
}
