<?php

namespace App\Http\Middleware;
use Closure;
use Carbon\Carbon;
use Auth;
use Cache;

class UserActivity
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
	    //активность пользователя
	    if(Auth::check()) {
		    $expiresAt = Carbon::now()->addMinutes(1);
		    Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
	    }
		//

        return $next($request);
    }
}
