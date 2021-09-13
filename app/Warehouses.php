<?php

namespace App;

/**
 * Class Warehouses
 * @package App
 */
class Warehouses extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'ref',
        'site_key',
        'description_uk',
        'description_ru',
        'type_of_warehouse',
        'number',
        'city_ref',
        'city_description_uk',
        'city_description_ru',
    ];
}
