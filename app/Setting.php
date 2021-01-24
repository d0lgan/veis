<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	protected $table = 'settings';
	protected $fillable = [
	    'site_on_of',
        'contact_form',
        'call_form',
        'slide_home',
        'shop_buy',
        'email_site',
        'address_site',
        'phone_site_1',
        'phone_site_2',
        'phone_site_3',
        'phone_site_4',
        'point_issues',
        'point_deliveries',
        'free_shipping',
        'universal',
        'categories',
        'brands',
        'viewed',
        'name_company',
        'country',
    ];

	public $timestamps = false;
}
