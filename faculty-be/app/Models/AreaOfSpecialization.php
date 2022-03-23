<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaOfSpecialization extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'area_of_specialization',
        'modified_by'
    ];
}
