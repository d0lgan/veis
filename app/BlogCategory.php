<?php

namespace App;

/**
 * Class BlogCategory
 * @package App
 */
class BlogCategory extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'title',
        'image'
    ];

    public function articles()
    {
        return $this->hasMany('App\Blog');
    }
}
