<?php

namespace App;

/**
 * Class Comment
 * @package App
 */
class Comment extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'comments';
    protected $fillable = ['order_id', 'name', 'email', 'status_id', 'product_id', 'com_text', 'user_id', 'updated_at', 'created_at'];

    //один ко многим
    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    //один ко многим
    public function product()
    {
        return $this->belongsTo('App\Product');
    }

    //связь один к одному
    public function status()
    {
        return $this->belongsTo('App\Status');
    }
}
