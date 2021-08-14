<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Gallery
 * @property int id
 * @property string name
 * @property string alt
 * @property int product_id
 * @property int sort
 * @property int status
 * @property string created_at
 * @property string updated_at
 * @package App
 */
class Gallery extends Model
{
	protected $table = 'galleries';


	public CONST ON_STATUS = 1;
    public CONST OFF_STATUS = 0;

	protected $fillable = ['name','product_id','status','updated_at','created_at', 'sort', 'alt'];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}
}
