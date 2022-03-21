<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubjectsTaught extends Model
{
    use HasFactory;

    protected $fillable = [
        'subjects_taught',
        'modified_by'
    ];
}
