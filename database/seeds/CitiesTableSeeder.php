<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
       \DB::table('cities')->insert(array (
           0 =>
           array (
               'ref' => 'Черкассы',
               'city_id' => 1,
           ),
           1 =>
           array (
               'ref' => 'Киев',
               'city_id' => 2,
           ),
           2 =>
           array (
               'ref' => 'Николаев',
               'city_id' => 3,
           ),
       ));
        
        
    }
}