<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RaterPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'position',
        'modified_by'
    ];
}