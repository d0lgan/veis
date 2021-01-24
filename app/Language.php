<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'locate_code','name', 'script','native','regional','public','default','created_at','updated_at'
	];

}
