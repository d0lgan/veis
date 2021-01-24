<?php

use Illuminate\Database\Seeder;
use App\ProductValue;
use Carbon\Carbon;

class ProductValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_values')->delete();

        ProductValue::insert([
            //Товар 1
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'price_option' => '0',
                'operation_option' => 'plus',
                'value_option_id' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
