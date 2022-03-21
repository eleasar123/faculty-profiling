<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelTaught extends Model
{
    use HasFactory;

    protected $fillable = [
        'level_taught',
        'modified_by'
    ];
}
