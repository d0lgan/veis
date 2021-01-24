<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
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
        return $this->belongsTo('App\BlogCategory','category_id');
    }
}
