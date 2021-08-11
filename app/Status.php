<?php

namespace App;

/**
 * Class Status
 * @package App
 */
class Status extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'title',
        'public'
    ];
}
