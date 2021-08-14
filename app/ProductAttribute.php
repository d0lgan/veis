<?php

namespace App;

/**
 * Class ProductAttribute
 * @property int id
 * @property int product_id
 * @property int attribute_id
 * @package App
 */
class ProductAttribute extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'product_attribute';
}