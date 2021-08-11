<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Category
 * @property int id
 * @property int parent_id
 * @property string title_ru
 * @property string title_uk
 * @property string meta_h1_ru
 * @property string meta_h1_uk
 * @property string slug_ru
 * @property string slug_uk
 * @property string description_ru
 * @property string description_uk
 * @property string seo_ru
 * @property string seo_uk
 * @property string sort
 * @property int at_home
 * @property string image
 * @property string created_at
 * @property string updated_at
 * @package App
 */
class Category extends \Illuminate\Database\Eloquent\Model
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

    protected $table = 'categories';
    protected $fillable = ['title', 'slug', 'description', 'image', 'parent_id', 'created_at', 'updated_at'];

    /*public function products()
    {
        return $this->hasMany('App\Product');
    }*/

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_category');
    }

    public function group_attributes()
    {
        return $this->belongsToMany('App\GroupAttribute', 'category_group_attribute');
    }

    /*public function group_attributes()
    {
        return $this->hasMany('App\GroupAttribute');
    }*/

    public function texts()
    {
        return $this->hasMany('App\Texts');
    }

    public function childs()
    {
        return $this->hasMany('App\Category', 'parent_id', 'id');
    }

    public function attributes()
    {
        return $this->belongsToMany('App\Attribute', 'category_attribute');
    }

    public function parent()
    {
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }
}
