<?php

namespace App;

/**
 * Class Option
 * @package App
 */
class Option extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = ['title', 'type', 'sort', 'need'];

    public function values()
    {

        return $this->hasMany(ValueOption::class);

    }
}
