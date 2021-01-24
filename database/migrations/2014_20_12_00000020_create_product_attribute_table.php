<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductAttributeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_attribute', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('product_id')->index()->unsigned()->nullable();
			$table->foreign('product_id')->references('id')->on('products');

			$table->integer('attribute_id')->index()->unsigned()->nullable();
			$table->foreign('attribute_id')->references('id')->on('attributes');

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_attribute');
	}

}
