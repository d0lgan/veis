<?php

namespace App;

/**
 * Class PointDelivery
 * @package App
 */
class PointDelivery extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'point_deliveries';
    public $timestamps = false;
    protected $fillable = ['title'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
