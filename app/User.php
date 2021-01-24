<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cache;
use App\Role;

class User extends Authenticatable
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

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'slug', 'phone', 'password','blocked',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    ////активность пользователя
	public function isOnline()
	{
		return Cache::has('user-is-online-' . $this->id);
	}

	/**
	 * @param string|array $roles
	 */
	public function authorizeRoles($roles)
	{
		if (is_array($roles)) {
			return $this->hasAnyRole($roles) ||
			       abort(401, 'This action is unauthorized.');
		}
		return $this->hasRole($roles) ||
		       abort(401, 'This action is unauthorized.');
	}
	/**
	 * Check multiple roles
	 * @param array $roles
	 */
	public function hasAnyRole($roles)
	{
		return null !== $this->roles()->whereIn('name', $roles)->first();
	}

	/**
	 * Check one role
	 * @param string $role
	 */

	public function hasRole($role)
	{
		return null !== $this->roles()->where('name', $role)->first();
	}

	public function roles()
	{
		return $this->belongsToMany('App\Role');
	}

	public function orders(){
		return $this->hasMany('App\Order');
	}

	public function isAdmin(){
		return $this->roles[0]->name == 'admin';
	}

	public function isModerator(){
		return $this->roles[0]->name == 'moderator';
	}

	public function AdminPanel(){
		if($this->roles[0]->name == 'moderator' || $this->roles[0]->name == 'admin' ){
			return true;
		}else{
			return false;
		}

	}

}
