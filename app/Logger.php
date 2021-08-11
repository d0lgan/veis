<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logger extends Model
{
	protected $table = 'loggers';
	protected $fillable = ['user','data','updated_at','created_at'];
}
