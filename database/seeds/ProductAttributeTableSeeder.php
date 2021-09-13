<?php

use Illuminate\Database\Seeder;

class ProductAttributeTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run() {


		\DB::table( 'product_attribute' )->delete();

		\DB::table( 'product_attribute' )->insert( array(
		    // Товар 1
			0 =>
				array(
					'id'           => 1,
					'product_id'   => 1,
					'attribute_id' => 3,
				),
			1 =>
				array(
					'id'           => 2,
					'product_id'   => 1,
					'attribute_id' => 7,
				),
			// Товар 2
            2 =>
                array(
                    'id'           => 3,
                    'product_id'   => 2,
                    'attribute_id' => 1,
                ),
            3 =>
                array(
                    'id'           => 4,
                    'product_id'   => 2,
                    'attribute_id' => 5,
                ),
            // Товар 3
            4 =>
                array(
                    'id'           => 5,
                    'product_id'   => 3,
                    'attribute_id' => 3,
                ),
            5 =>
                array(
                    'id'           => 6,
                    'product_id'   => 3,
                    'attribute_id' => 7,
                ),
            // Товар 4
            6 =>
                array(
                    'id'           => 7,
                    'product_id'   => 4,
                    'attribute_id' => 1,
                ),
            7 =>
                array(
                    'id'           => 8,
                    'product_id'   => 4,
                    'attribute_id' => 5,
                ),
            // Товар 5
            8 =>
                array(
                    'id'           => 9,
                    'product_id'   => 5,
                    'attribute_id' => 18,
                ),
            // Товар 5
            9 =>
                array(
                    'id'           => 10,
                    'product_id'   => 6,
                    'attribute_id' => 24,
                ),


		) );


	}
}