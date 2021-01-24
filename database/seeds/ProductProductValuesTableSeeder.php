<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductProductValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_product_values')->delete();

        \DB::table( 'product_product_values' )->insert([
            //Товар 1
            [
                'product_id' => 1,
                'product_value_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 1,
                'product_value_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 2
            [
                'product_id' => 2,
                'product_value_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 2,
                'product_value_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 3
            [
                'product_id' => 3,
                'product_value_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 3,
                'product_value_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            //Товар 4
            [
                'product_id' => 4,
                'product_value_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'product_id' => 4,
                'product_value_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
