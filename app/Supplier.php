<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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
