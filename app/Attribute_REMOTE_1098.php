<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Attribute
 * @property int id
 * @property string name_ru
 * @property string name_uk
 * @property string item_name_ru
 * @property string item_name_uk
 * @property string slug_ru
 * @property string slug_uk
 * @property int group_attribute_id
 * @property int sort
 * @property string created_at
 * @property string updated_at
 * @package App
 */
class Attribute extends \Illuminate\Database\Eloquent\Model
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
    protected $fillable = ['name_ru', 'name_uk', 'item_name_ru', 'item_name_uk', 'group_attribute_id', 'sort', 'created_at', 'updated_at'];

    public function group_attribute()
    {
        return $this->belongsTo('App\GroupAttribute');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_attribute');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_attribute');
    }
}