<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;

/**
 * Class Role
 * @package App
 */
class Role extends \Illuminate\Database\Eloquent\Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
