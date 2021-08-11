<?php

namespace App;

/**
 * Class ProductCategory
 * @property int id
 * @property int product_id
 * @property category_id
 * @package App
 */
class ProductCategory extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'product_attribute';
}