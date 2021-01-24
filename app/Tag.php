<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	use Sluggable;

	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}

	protected $table = 'tags';
	protected $fillable = ['title','slug','created_at','updated_at'];

	public function products() {
		return $this->belongsToMany('App\Product','product_tag');
	}
}
