<?php

namespace App;

/**
 * Class Logger
 * @package App
 */
class Logger extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'loggers';
    protected $fillable = ['user','data','updated_at','created_at'];
}
