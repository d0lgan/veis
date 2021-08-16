<?php

namespace App;

/**
 * Class Supplier
 * @package App
 */
class Supplier extends \Illuminate\Database\Eloquent\Model
{
    protected $fillable = [
        'title',
        'link',
        'exchange',
        'add_new_products',
        'update_new_products',
        'overwrite_products'
    ];
}
