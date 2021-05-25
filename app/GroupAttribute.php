<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class GroupAttribute extends Model
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

	protected $table = 'group_attributes';
	protected $fillable = ['title_ru', 'title_uk', 'slug_uk', 'slug_ru', 'category_id', 'public', 'sort'];

	public function attributes()
	{
		return $this->hasMany('App\Attribute')->orderBy('sort');
	}

    public function categories() {
        return $this->belongsToMany('App\Category','category_group_attribute');
    }

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
