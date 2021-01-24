<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'ref',
        'description_uk',
        'description_ru',
        'areas_center'
    ];
}
