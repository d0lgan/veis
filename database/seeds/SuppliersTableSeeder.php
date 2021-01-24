<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('suppliers')->delete();

        \DB::table('suppliers')->insert(array(
        	0 => array(
        		'title' => 'Test',
                'link' => 'New',
        	),

        	1 => array(
        		'title' => 'Test',
                'link' => 'new',
        	),

        	2 => array(
        		'title' => 'Test',
                'link' => 'New',
        	),

        	3 => array(
        		'title' => 'Test2',
                'link' => 'NEW',
        	),

        ));
    }
}
