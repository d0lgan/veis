<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManufacturersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('manufacturers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ru')->nullable();
			$table->string('title_uk')->nullable();
			$table->string('image')->nullable();
			$table->string('meta_h1_ru')->nullable();
			$table->string('meta_h1_uk')->nullable();
			$table->string('link_ru')->nullable();
			$table->string('link_uk')->nullable();
			$table->text('seo')->nullable();
			$table->string('slug_ru')->nullable();
			$table->string('slug_uk')->nullable();
			$table->integer('sort')->nullable();
			$table->text('description_ru')->nullable();
			$table->text('description_uk')->nullable();
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
		Schema::drop('manufacturers');
	}

}
