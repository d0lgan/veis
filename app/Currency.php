<?php

namespace App;

/**
 * Class Currency
 * @package App
 */
class Currency extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = ['title', 'code', 'rate', 'default', 'public'];
}
