<?php

namespace App;

/**
 * Class ValueOption
 * @package App
 */
class ValueOption extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'value',
        'type',
        'sort',
        'option_id',
    ];

    public function option()
    {
        return $this->belongsToMany(Option::class);
    }

    public function select_options()
    {
        return $this->belongsTo(Option::class, 'option_id');
    }
}
