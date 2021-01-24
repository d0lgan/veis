<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
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
