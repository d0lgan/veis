<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Redirect
 * @package App
 */
class Redirect extends \Illuminate\Database\Eloquent\Model
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

    public function attributes()
    {
        return $this->belongsToMany('App\Attribute', 'redirect_attribute');
    }

    protected $table = 'redirects';
}
