<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolType extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_type',
        'modified_by'
    ];
}
