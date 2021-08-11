<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductValue extends Model
{
    protected $fillable = [
        'need_option',
        'value_option_id',
        'price_option',
        'operation_option',
        'value_id',
    ];

    /*public function products() {

        return $this->hasMany(ProductOption::class,'product_id');

    }*/

    public function values() {

        return $this->belongsTo(ValueOption::class);

    }

    public function products() {

        return $this->belongsToMany(Product::class, 'product_product_values');

    }

    public function valueOption() {

        return $this->belongsTo(ValueOption::class);

    }
}
