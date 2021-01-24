<?php

namespace App\Providers;

use Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use App\Language;

class ConfigServiceProvider extends ServiceProvider {

	public function register()
	{
        if (App::runningInConsole()) {
            echo 'Running in console (i.e. migration).  Disabling ConfigServiceProvider' . PHP_EOL;
            return;
        }

		$languages = DB::table( 'languages' )
		              ->where( 'public', 1 )
		              ->get();

		$langs = [];
		foreach ($languages as $language) {
			$langs[ $language->locate_code ] = array(
				'name'   => "$language->name",
				'script' => "$language->script",
				'native' => "$language->native"
			);
		}

		config([
			'laravellocalization.supportedLocales' => $langs,

			'laravellocalization.useAcceptLanguageHeader' => true,

			'laravellocalization.hideDefaultLocaleInURL' => true
		]);


		$language_default = DB::table( 'languages' )
		               ->where( 'default', 1 )
		               ->first();
		config(['app.locale' => $language_default->locate_code]);

	}

}