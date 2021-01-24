<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('brands')->delete();

        \DB::table('brands')->insert(array(

        	0 => array(
        		'title' => 'Test',
        		'link' => 'test'
        	),

        	1 => array(
        		'title' => 'Test1',
        		'link' => 'test1'
        	),

        	2 => array(
        		'title' => 'Test2',
        		'link' => 'test2'
        	),

        ));
    }
}
