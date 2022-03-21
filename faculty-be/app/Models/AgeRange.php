<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgeRange extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'age_range',
        'created_at',
        'updated_at',
        'modified_by'
    ];
}
