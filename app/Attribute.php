<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
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
            'slug_ru' => [
                'source' => 'title_ru'
            ],
            'slug_uk' => [
                'source' => 'title_uk'
            ]
        ];
    }

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
