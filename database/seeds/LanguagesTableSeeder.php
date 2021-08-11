<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    \DB::table('languages')->delete();

	    \DB::table('languages')->insert(array (
		    0 =>
			    array (
			    	'id' => 1,
				    'locate_code' => 'ru',
				    'name' => 'Russian',
				    'script' => 'Cyrl',
				    'native' => 'Русский',
				    'regional' => 'ru_RU',
				    'public' => 1,
				    'default' => 1,
				    'created_at' => '2019-06-01 13:31:35',
				    'updated_at' => '2019-06-01 13:31:35',
			    ),
		    1 =>
			    array (
				    'id' => 2,
				    'locate_code' => 'uk',
				    'name' => 'Ukrainian',
				    'script' => 'Cyrl',
				    'native' => 'Українська',
				    'regional' => 'uk_UA',
				    'public' => 1,
				    'default' => 0,
				    'created_at' => '2019-06-01 13:31:35',
				    'updated_at' => '2019-06-01 13:31:35',
			    ),
//		    2 =>
//			    array (
//				    'id' => 3,
//				    'locate_code' => 'en',
//				    'name' => 'English',
//				    'script' => 'Latn',
//				    'native' => 'English',
//				    'regional' => 'en_GB',
//				    'public' => 1,
//				    'default' => 0,
//				    'created_at' => '2019-06-01 13:31:35',
//				    'updated_at' => '2019-06-01 13:31:35',
//			    ),
	    ));
    }
}
