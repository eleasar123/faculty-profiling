<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurricularClassification extends Model
{
    use HasFactory;

    protected $fillable = [
        'curricular_classification',
        'modified_by'
    ];
}
