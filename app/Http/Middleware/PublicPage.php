<?php

namespace App\Http\Middleware;

use Closure;
use App\Page;
use Illuminate\Support\Facades\Request;


class PublicPage
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
        $name = Request::route()->getName();
//        dd($name);
        $page = Page::where('type', $name)->first();

        if($page){
            if($page->public == 1){
                return $next($request);
            }else{
                return redirect()->route('home');
            }
        }else{
            return $next($request);
        }
    }
}
