<?php

namespace App;

/**
 * Class Contact
 * @package App
 */
class Contact extends \Illuminate\Database\Eloquent\Model
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
