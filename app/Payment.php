<?php

namespace App;

/**
 * Class Payment
 * @package App
 */
class Payment extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'payments';
    protected $fillable = ['title'];
}
