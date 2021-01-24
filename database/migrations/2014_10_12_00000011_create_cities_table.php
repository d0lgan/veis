<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ref')->nullable();
			$table->string('description_uk')->nullable();
			$table->string('description_ru')->nullable();
			$table->integer('delivery_1')->nullable();
			$table->integer('delivery_2')->nullable();
			$table->integer('delivery_3')->nullable();
			$table->integer('delivery_4')->nullable();
			$table->integer('delivery_5')->nullable();
			$table->integer('delivery_6')->nullable();
			$table->integer('delivery_7')->nullable();
			$table->string('area')->nullable();
			$table->string('city_id')->nullable();
			$table->string('settlement_type')->nullable();
			/*$table->string('settlement_type_description_uk');
			$table->string('settlement_type_description_ru');*/

			/*$table->string('area')->index()->unsigned()->nullable();
			$table->foreign('area')->references('ref')->on('regions');*/
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cities');
	}

}
