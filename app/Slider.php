<?php

namespace App;

/**
 * Class Slider
 * @package App
 */
class Slider extends \Illuminate\Database\Eloquent\Model
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
