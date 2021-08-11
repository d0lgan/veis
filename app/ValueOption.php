<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValueOption extends Model
{
    protected $fillable = [
        'value',
        'type',
        'sort',
        'option_id',

        ];


    public function option(){

        return $this->belongsToMany(Option::class);

    }

    public function select_options(){

        return $this->belongsTo(Option::class, 'option_id');

    }

}
