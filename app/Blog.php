<?php

namespace App;

/**
 * Class Blog
 * @package App
 */
class Blog extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'title',
        'category_id',
        'short_desc',
        'full_desc',
        'image'
    ];

    public function blog_categories()
    {
        return $this->belongsTo('App\BlogCategory', 'category_id');
    }
}
