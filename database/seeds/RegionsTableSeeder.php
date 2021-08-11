<?php

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('regions')->delete();


    	\DB::table('regions')->insert(array(

    		0 => array(
    			'ref' => 'Region1',
    			'description_uk' => 'RegionDescUK',
    			'description_ru' => 'RegionDescRU',
    			'areas_center' => 'Region1Center'
    		),

    		1 => array(
    			'ref' => 'Region2',
    			'description_uk' => 'RegionDescUK',
    			'description_ru' => 'RegionDescRU',
    			'areas_center' => 'Region2Center'
    		),

    		2 => array(
    			'ref' => 'Region3',
    			'description_uk' => 'RegionDescUK',
    			'description_ru' => 'RegionDescRU',
    			'areas_center' => 'Region3Center'
    		),

    		3 => array(
    			'ref' => 'Region4',
    			'description_uk' => 'RegionDescUK',
    			'description_ru' => 'RegionDescRU',
    			'areas_center' => 'Region4Center'
    		),

    	));
    }
}
