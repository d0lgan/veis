<?php

namespace App;

/**
 * Class Country
 * @package App
 */
class Country extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'countries';
    protected $fillable = ['title'];

    public function cities()
    {
        return $this->hasMany('App\City');
    }
}
