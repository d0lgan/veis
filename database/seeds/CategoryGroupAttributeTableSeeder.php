<?php

use Illuminate\Database\Seeder;

class CategoryGroupAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('category_group_attribute')->delete();

        \DB::table( 'category_group_attribute' )->insert([
            [
                'category_id' => 1,
                'group_attribute_id' => 1
            ],
            [
                'category_id' => 1,
                'group_attribute_id' => 2
            ],
            [
                'category_id' => 1,
                'group_attribute_id' => 3
            ],
            [
                'category_id' => 1,
                'group_attribute_id' => 4
            ],
            [
                'category_id' => 2,
                'group_attribute_id' => 1
            ],
            [
                'category_id' => 2,
                'group_attribute_id' => 2
            ],
            [
                'category_id' => 2,
                'group_attribute_id' => 3
            ],
            [
                'category_id' => 2,
                'group_attribute_id' => 4
            ],
            [
                'category_id' => 3,
                'group_attribute_id' => 4
            ],
            [
                'category_id' => 3,
                'group_attribute_id' => 5
            ],
            [
                'category_id' => 3,
                'group_attribute_id' => 6
            ]

        ]);
    }
}
