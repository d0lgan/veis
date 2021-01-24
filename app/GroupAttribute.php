<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GroupAttribute extends Model
{
	protected $table = 'group_attributes';
	protected $fillable = ['name','category_id', 'public', 'sort'];

	public function attributes()
	{
		return $this->hasMany('App\Attribute')->orderBy('sort');
	}

    public function categories() {
        return $this->belongsToMany('App\Category','category_group_attribute');
    }

	public function category()
	{
		return $this->belongsTo('App\Category');
	}
}
