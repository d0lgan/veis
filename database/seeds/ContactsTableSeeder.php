<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->delete();


    	\DB::table('contacts')->insert(array(

    		0 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    		1 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    		2 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    		3 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    		4 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    		5 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    		6 => array(
    			'type' => 'qwerty',
    			'name' => 'ContactTest',
    			'phone' => '111111111',
    			'email' => 'admin@admin.com',
 				'status' => 1

    		),

    	));
    }
}