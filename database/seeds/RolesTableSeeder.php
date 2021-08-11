<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'slug' => 'admin',
                'description' => 'admin_site',
                'created_at' => '2018-04-09 21:19:43',
                'updated_at' => '2018-04-09 21:19:44',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'moderator',
                'slug' => 'moderator',
                'description' => 'moderator_site',
                'created_at' => '2018-04-09 21:19:45',
                'updated_at' => '2018-04-09 21:19:46',
            ),
            2 =>
	            array (
		            'id' => 3,
		            'name' => 'user',
		            'slug' => 'user',
		            'description' => 'user_site',
		            'created_at' => '2018-04-09 21:19:45',
		            'updated_at' => '2018-04-09 21:19:46',
	            ),
        ));
        
        
    }
}