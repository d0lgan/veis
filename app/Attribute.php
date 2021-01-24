<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
	protected $table = 'attributes';
	protected $fillable = ['title', 'item_name', 'group_attribute_id','sort', 'created_at','updated_at'];

	public function group_attribute()
	{
		return $this->belongsTo('App\GroupAttribute');
	}

	public function products()
	{
		return $this->belongsToMany('App\Product','product_attribute');
	}
}
