<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'title',
        'button',
        'link',
        'additional_button',
        'additional_link',
        'color',
        'image',
        'description',
        'sort'
    ];
}
