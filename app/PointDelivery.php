<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointDelivery extends Model
{
	protected $table = 'point_deliveries';
	public $timestamps = false;
	protected $fillable = ['title'];

	public function city()
	{
		return $this->belongsTo('App\City');
	}
}
