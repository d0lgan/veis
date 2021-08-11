<?php

namespace App;

/**
 * Class City
 * @package App
 */
class City extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'cities';
    public $timestamps = false;
    protected $fillable = [
        'ref',
        'description_uk',
        'description_ru',
        'delivery_1',
        'delivery_2',
        'delivery_3',
        'delivery_4',
        'delivery_5',
        'delivery_6',
        'delivery_7',
        'area',
        'city_id',
        'settlement_type',
        'settlement_type_description_uk',
        'settlement_type_description_ru',
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function point_deliveries()
    {
        return $this->hasMany('App\PointDelivery');
    }
}
