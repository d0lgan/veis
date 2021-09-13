<?php

namespace App;

/**
 * Class Stock
 * @package App
 */
class Stock extends \Illuminate\Database\Eloquent\Model
{
    public function products() {
        return $this->hasMany('App/Product');
    }
}
