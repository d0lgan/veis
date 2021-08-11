<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blogs')->delete();

        \DB::table('blogs')->insert(array(

        	0 => array(
        		'title' => 'BlogTest'
        	),

        	1 => array(
        		'title' => 'BlogTest'
        	),

        	2 => array(
        		'title' => 'BlogTest'
        	),

        	3 => array(
        		'title' => 'BlogTest'
        	),

        ));
    }
}
