<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = [
        'url',
        'imageable_id',
        'imageable_type',
        'title',
        'description',
    ];
}
