<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sliders')->delete();

        \DB::table('sliders')->insert(array(
        	0 => array(
        		'title' => 'Slider1',
                'sort' => 1
        	),

        	1 => array(
        		'title' => 'Slider2',
                'sort' => 2
        	),

        	2 => array(
        		'title' => 'Slider3',
                'sort' => 3
        	),

        	3 => array(
        		'title' => 'Slider4',
                'sort' => 4
        	),

        ));
    }
}
