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
                'source' => 'name_ru'
            ],
            'slug_uk' => [
                'source' => 'name_uk'
            ]
        ];
    }

	protected $table = 'attributes';
	protected $fillable = ['name_ru', 'name_uk', 'item_name_ru', 'item_name_uk', 'group_attribute_id','sort', 'created_at','updated_at'];

	public function group_attribute()
	{
		return $this->belongsTo('App\GroupAttribute');
	}

	public function products()
	{
		return $this->belongsToMany('App\Product','product_attribute');
	}
}
