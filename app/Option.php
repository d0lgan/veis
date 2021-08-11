<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['title', 'type', 'sort', 'need'];


    public function values(){

        return $this->hasMany(ValueOption::class);

    }
}
