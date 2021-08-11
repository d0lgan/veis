<?php

namespace App;

/**
 * Class Order
 * @package App
 */
class Order extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'delivery',
        'city',
        'type',
        'status',
        'confirm',
        'new',
        'warehouse',
        'comment',
        'products',
        'total',
        'region'
    ];

    //один ордер может содержать одного юзера - один ко многим
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //один ордер может содержать много товаров - многие ко многим
    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

    //один ордер может содержать один статус - один ко многим
    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    //один ордер может содержать много комментариев - один ко многим
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}