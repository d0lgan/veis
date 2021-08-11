<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'contacts';
	protected $fillable = [
        'type',
        'email',
        'name',
		'phone',
		'theme',
        'message',
		'created_at',
        'updated_at'
    ];
}
