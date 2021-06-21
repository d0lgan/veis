<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title_ru');
			$table->string('title_uk');
            $table->string('link_ru')->nullable();
            $table->string('link_uk')->nullable();
            $table->string('meta_h1_ru')->nullable();
            $table->string('meta_h1_uk')->nullable();
            $table->text('seo_ru')->nullable();
            $table->text('seo_uk')->nullable();
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
		Schema::drop('tags');
	}

}
