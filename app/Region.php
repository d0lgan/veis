<?php

namespace App;

/**
 * Class Region
 * @package App
 */
class Region extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'ref',
        'description_uk',
        'description_ru',
        'areas_center'
    ];
}
