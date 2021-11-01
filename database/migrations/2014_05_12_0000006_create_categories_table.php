<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categories', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('parent_id')->nullable()->default(0);
			$table->string('title_ru')->nullable();
			$table->string('title_uk')->nullable();
			$table->string('meta_h1_ru')->nullable();
			$table->string('meta_h1_uk')->nullable();
			$table->string('slug_ru')->nullable();
			$table->string('slug_uk')->nullable();
			$table->mediumText('description_ru')->nullable();
			$table->mediumText('description_uk')->nullable();
			$table->text('seo_ru')->nullable();
			$table->text('seo_uk')->nullable();

            // Дополнительные поля для описания товаров
			$table->text('name_first_field_ru')->nullable();
			$table->text('content_first_field_ru')->nullable();
			$table->text('name_first_field_uk')->nullable();
			$table->text('content_first_field_uk')->nullable();
			$table->text('name_second_field_ru')->nullable();
			$table->text('content_second_field_ru')->nullable();
			$table->text('name_second_field_uk')->nullable();
			$table->text('content_second_field_uk')->nullable();
			$table->text('name_thirst_field_ru')->nullable();
			$table->text('content_thirst_field_ru')->nullable();
			$table->text('name_thirst_field_uk')->nullable();
			$table->text('content_thirst_field_uk')->nullable();

			$table->text('sort')->nullable();
			$table->integer('at_home')->default(0);
			$table->string('image')->nullable();
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
		Schema::drop('categories');
	}

}
