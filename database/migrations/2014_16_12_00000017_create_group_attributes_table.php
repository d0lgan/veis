<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupAttributesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_attributes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ru')->nullable();
			$table->string('title_uk')->nullable();
			$table->integer('public')->nullable();
			$table->integer('sort')->nullable();

			$table->integer('category_id')->index()->unsigned()->nullable();
			$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

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
		Schema::drop('group_attributes');
	}

}
