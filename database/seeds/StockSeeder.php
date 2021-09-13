<?php

use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('stocks')->delete();

        \DB::table('stocks')->insert(array(
        	0 => array(
        		'title' => 'Test',
                'label' => 'New',
                'public' => 0
        	),

        	1 => array(
        		'title' => 'Sale',
                'label' => 'SALE',
                'public' => 1
        	),

        	2 => array(
        		'title' => 'stock2',
                'label' => 'New',
                'public' => 0
        	),

        	3 => array(
        		'title' => 'Test2',
                'label' => 'SALE',
                'public' => 1
        	),

        ));
    }
}
