<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class UserBlocked
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	//баним пользователя
    	if(Auth::check()){
    		$user = Auth::user();
    		if($user->blocked == 1){
			    Auth::logout();
			    return back()->withInput()->withErrors(array('info_messages'
			                                                 => 'Вы забанены!'));
		    }
	    }
		return $next($request);
    }
}
