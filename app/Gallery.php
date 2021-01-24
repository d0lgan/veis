<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'galleries';

	protected $fillable = ['name','product_id','status','updated_at','created_at', 'sort', 'alt'];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}
}
