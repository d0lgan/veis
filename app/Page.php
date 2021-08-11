<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Page
 * @package App
 */
class Page extends \Illuminate\Database\Eloquent\Model
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

    protected $table = 'pages';
    protected $fillable = ['title', 'slug', 'description', 'image', 'public', 'seo', 'type', 'meta_h1', 'created_at', 'updated_at'];
}
