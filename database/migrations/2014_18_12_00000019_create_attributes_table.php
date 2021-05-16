<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attributes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name_ru')->nullable();
			$table->string('name_uk')->nullable();
			$table->string('item_name_ru')->nullable();
			$table->string('item_name_uk')->nullable();
            $table->string('slug_ru')->nullable();
            $table->string('slug_uk')->nullable();

			$table->integer('group_attribute_id')->index()->unsigned()->nullable();
			$table->foreign('group_attribute_id')->references('id')->on('group_attributes')->onDelete('cascade');

			$table->integer('sort')->nullable()->default(0);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('attributes');
	}

}
