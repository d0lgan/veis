<?php

use Illuminate\Database\Seeder;

class WarehousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('warehouses')->delete();


    	\DB::table('warehouses')->insert(array(

    		0 => array(
    			'ref' => 'WarehouseTest1',
    			'site_key' => 'WarehouseTestKey1',
    			'description_uk' => 'WarehouseDescUK',
    			'description_ru' => 'WarehouseDescRU',
    			'type_of_warehouse' => 'WarehouseType1',
    			'number' => 'WarehouseNumber1',
    			'city_ref' => 'WarehouseRef1',
    			'city_description_uk' => 'WarehousesCityDescUK',
    			'city_description_ru' => 'WarehousesCityDescRU'
    		),


    		1 => array(
    			'ref' => 'WarehouseTest2',
    			'site_key' => 'WarehouseTestKey2',
    			'description_uk' => 'WarehouseDescUK',
    			'description_ru' => 'WarehouseDescRU',
    			'type_of_warehouse' => 'WarehouseType2',
    			'number' => 'WarehouseNumber2',
    			'city_ref' => 'WarehouseRef2',
    			'city_description_uk' => 'WarehousesCityDescUK',
    			'city_description_ru' => 'WarehousesCityDescRU'
    		),


    		2 => array(
    			'ref' => 'WarehouseTest3',
    			'site_key' => 'WarehouseTestKey3',
    			'description_uk' => 'WarehouseDescUK',
    			'description_ru' => 'WarehouseDescRU',
    			'type_of_warehouse' => 'WarehouseType3',
    			'number' => 'WarehouseNumber3',
    			'city_ref' => 'WarehouseRef3',
    			'city_description_uk' => 'WarehousesCityDescUK',
    			'city_description_ru' => 'WarehousesCityDescRU'
    		),


    		3 => array(
    			'ref' => 'WarehouseTest4',
    			'site_key' => 'WarehouseTestKey4',
    			'description_uk' => 'WarehouseDescUK',
    			'description_ru' => 'WarehouseDescRU',
    			'type_of_warehouse' => 'WarehouseType4',
    			'number' => 'WarehouseNumber4',
    			'city_ref' => 'WarehouseRef4',
    			'city_description_uk' => 'WarehousesCityDescUK',
    			'city_description_ru' => 'WarehousesCityDescRU'
    		),

    	));
    }
}
