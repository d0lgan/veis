<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ru');
			$table->string('title_uk');
			$table->string('meta_h1_ru')->nullable();
			$table->string('meta_h1_uk')->nullable();
			$table->string('slug')->nullable();
			$table->text('seo_ru')->nullable();
			$table->text('seo_uk')->nullable();
			$table->string('type', 50);
			$table->text('description_ru')->nullable();
			$table->text('description_uk')->nullable();
			$table->string('image')->nullable();
			$table->integer('public')->nullable();
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
		Schema::drop('pages');
	}

}
