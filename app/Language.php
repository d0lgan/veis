<?php

namespace App;

/**
 * Class Language
 * @package App
 */
class Language extends \Illuminate\Database\Eloquent\Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'locate_code', 'name', 'script', 'native', 'regional', 'public', 'default', 'created_at', 'updated_at'
    ];
}
