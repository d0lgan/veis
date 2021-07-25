<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
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

    protected $table = 'redirects';
}
