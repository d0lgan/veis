<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Tag
 * @package App
 */
class Tag extends \Illuminate\Database\Eloquent\Model
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

    protected $table = 'tags';
    protected $fillable = ['title_ru', 'title_uk', 'slug_ru', 'slug_uk', 'created_at', 'updated_at'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'product_tag');
    }
}
