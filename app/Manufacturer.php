<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Manufacturer
 * @package App
 */
class Manufacturer extends \Illuminate\Database\Eloquent\Model
{
    use Sluggable;

    protected $table = 'manufacturers';
    protected $fillable = ['title', 'slug', 'meta_h1', 'description', 'link', 'sort', 'image', 'created_at', 'updated_at'];

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

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
