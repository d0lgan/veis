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
        // dd($name);
        $page = Page::where('type', $name)->first();

        if($page){
            if($page->public == 1){
                return $next($request);
            }else{
                return abort(404);
            }
        }else{
            return $next($request);
        }
    }

//INSERT INTO `pages` (`id`, `title_ru`, `title_uk`, `meta_h1_ru`, `meta_h1_uk`, `slug`, `seo_ru`, `seo_uk`, `type`, `description_ru`, `description_uk`, `image`, `public`, `created_at`, `updated_at`) VALUES (NULL, 'Каталог Ru', 'Каталог Uk', 'мета ру', 'мета ук', 'catalog', 'seo ru', 'seo uk', 'catalog', 'desc ru', 'desc uk', NULL, '1', NULL, NULL);
}
