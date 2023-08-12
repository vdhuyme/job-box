<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    protected $fillable = [
        'school',
        'majors',
        'start_at',
        'end_at',
        'description',
    ];
}
