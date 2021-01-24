<?php

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('blog_categories')->delete();
        
        \DB::table('blog_categories')->insert(array(

        	0 => array(
        		'title' => 'BlogCategoriesTest'
        	),

        	1 => array(
        		'title' => 'BlogCategoriesTest'
        	),

        	2 => array(
        		'title' => 'BlogCategoriesTest'
        	),

        	3 => array(
        		'title' => 'BlogCategoriesTest'
        	),

        ));
    }
}
