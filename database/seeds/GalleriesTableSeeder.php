<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (

        	//товар 1
            0 => 
            array (
                'id' => 1,
                'name' => 'product_gallery_1591281855.jpg',
                'product_id' => 1,
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            //товар 2
            1 =>
                array (
                    'id' => 2,
                    'name' => 'product_gallery_1591284544.jpg',
                    'product_id' => 2,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            //товар 3
            2 =>
                array (
                    'id' => 3,
                    'name' => 'product_gallery_1591284547.jpg',
                    'product_id' => 3,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            //товар 4
            3 =>
                array (
                    'id' => 4,
                    'name' => 'product_gallery_1591281851.jpg',
                    'product_id' => 4,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            //товар 5
            4 =>
                array (
                    'id' => 5,
                    'name' => 'product_gallery_1591281597.jpg',
                    'product_id' => 5,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'product_gallery_1591281591.jpg',
                    'product_id' => 5,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            //товар 6
            6 =>
                array (
                    'id' => 7,
                    'name' => 'product_gallery_1591285645.jpg',
                    'product_id' => 6,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'product_gallery_1591284875.jpg',
                    'product_id' => 6,
                    'status' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ),
        ));
        
        
    }
}