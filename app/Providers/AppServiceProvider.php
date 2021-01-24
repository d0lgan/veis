<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use App\Setting;
use App\Category;
use App\Language;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (App::runningInConsole()) {
            echo 'Running in console (i.e. migration).  Disabling AppServiceProvider' . PHP_EOL;
            return;
        }

	    $settings = Setting::first();
	    view()->share('site_on_of', $settings->site_on_of);
	    view()->share('email_site', $settings->email_site);
	    view()->share('address_site', $settings->address_site);
	    view()->share('phone_site_1', $settings->phone_site_1);
	    view()->share('phone_site_2', $settings->phone_site_2);
	    view()->share('phone_site_3', $settings->phone_site_3);
	    view()->share('phone_site_4', $settings->phone_site_4);
	    view()->share('shop_buy', $settings->shop_buy);
	    view()->share('slide_home', $settings->slide_home);
	    view()->share('free_shipping', $settings->free_shipping);
	    view()->share('name_company', $settings->name_company);
	    view()->share('country', $settings->country);
	    view()->share('universal', $settings->universal);
	    view()->share('categories', $settings->categories);
	    view()->share('brands', $settings->brands);
	    view()->share('viewed', $settings->viewed);
	    view()->share('point_issues', $settings->shop_buy);
	    view()->share('point_deliveries', $settings->shop_buy);

	    $categories_menu_top = Category::where('parent_id',0)->get();
	    view()->share(compact('categories_menu_top'));

	    $languages = Language::where('public',1)->get();
	    view()->share(compact('languages'));
    }


    /**
     * Register any application services.
     *
     * @return void
     */
}
